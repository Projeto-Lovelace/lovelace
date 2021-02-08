<?php


namespace App\Controller\Admin;


use App\Document\User as UserDocument;
use App\DTO\Email as EmailObject;
use App\DTO\Layers\ApproveUserRegister;
use App\DTO\Layers\FindInDatabase;
use App\DTO\Layers\FindUserAddress;
use App\DTO\Layers\LoginLinkGenerator;
use App\DTO\Layers\Mailer;
use App\DTO\Layers\UpdateUserRole;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\LoginLink\LoginLinkHandlerInterface;

/**
 * Class User
 * @package App\Controller\Admin
 * @Route("/admin/users")
 */
class User extends AbstractController
{
    /**
     * @var MainBuilder
     */
    private $mainBuilder;
    /**
     * @var DocumentManager
     */
    private $manager;
    /**
     * @var LoginLinkHandlerInterface
     */
    private $loginLinkHandler;

    /**
     * User constructor.
     * @param MainBuilder $mainBuilder
     * @param DocumentManager $manager
     */
    public function __construct(MainBuilder $mainBuilder, DocumentManager $manager, LoginLinkHandlerInterface $loginLinkHandler)
    {
        $this->mainBuilder = $mainBuilder;
        $this->manager = $manager;
        $this->loginLinkHandler = $loginLinkHandler;
    }

    /**
     * @Route("", name="listUser")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listUsers()
    {
        try {
            $main = $this->mainBuilder->build($this->manager);

            $main->addLayer(new FindInDatabase('user'));

            $main->run();

            $users = $main->getResults()[0]["findDocument"];

            return $this->render("admin/users.html.twig", ["users" => $users]);
        } catch (\Exception $exception) {
            return new JsonResponse(
                [
                    "message" => $exception->getMessage(),
                    "more" => $exception->getTrace(),
                    "file" => $exception->getFile(),
                    "line" => $exception->getLine()
                ], $exception->getCode() ?: 500
            );
        }
    }

    /**
     * @Route("/profile/{userId}", name="editUserData")
     */
    public function editUserData($userId)
    {
        try {
            $main = $this->mainBuilder->build($this->manager);

            $main->addLayer(new FindInDatabase('user', 'findOneBy', '_id', $userId));
            $main->addLayer(new FindUserAddress($userId));

            $main->run();

            $user = $main->getResults()[0]['findDocument'];
            $address = $main->getResults()[1]['address'];

            if (!$user) {
                $user = $this->getUser();
            }
            return $this->render('admin/userData.html.twig', ['userSelected' => $user, 'address' => $address]);
        } catch (\Exception $exception) {
            return new JsonResponse(
                [
                    "message" => $exception->getMessage(),
                    "more" => $exception->getTrace(),
                    "file" => $exception->getFile(),
                    "line" => $exception->getLine()
                ], $exception->getCode() ?: 500
            );
        }
    }

    /**
     * @Route("/send/confirmation/email", name="send_confirmation_email")
     * @param Request $request
     */
    public function sendConfirmationEmail(Request $request)
    {
        $main = $this->mainBuilder->build($this->manager);
        $userId = $request->query->get("user");

        #TODO refactor

        $user = $this->manager->find(UserDocument::class, $userId);
        $user->setRegisterApproved(true);
        $this->manager->persist($user);
        $this->manager->flush();

        $email = new EmailObject();
        $email->setEmailAddress($user->getEmail())
            ->setTitle("Registro Lovelace");
        $main->setUser($user);
        $main->addResults($email);
        $main->addLayer(new LoginLinkGenerator($this->loginLinkHandler));
        $main->addLayer(new Mailer($email));
        $main->run();
        return new JsonResponse("ok", Response::HTTP_OK);
    }

    /**
     * @Route("/role/update")
     * @param Request $request
     */
    public function updateUserRole(Request $request): JsonResponse
    {
        try {
            $main = $this->mainBuilder->build($this->manager);
            $main->addLayer(new UpdateUserRole(json_decode($request->getContent(), true)));
            $main->run();
            return new JsonResponse("ok", Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @Route("/register/approve")
     * @param Request $request
     */
    public function approveUserRegister(Request $request)
    {
        try {
            $main = $this->mainBuilder->build($this->manager);
            $main->addLayer(new ApproveUserRegister(json_decode($request->getContent(), true)));
            $main->addLayer(new LoginLinkGenerator($this->loginLinkHandler));
            $main->addLayer(new Mailer('Confirmação de email'));
            $main->run();
            return new JsonResponse("ok", Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}