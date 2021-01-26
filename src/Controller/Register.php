<?php

namespace App\Controller;

use App\Document\Address;
use App\Document\User;
use App\DTO\Email as EmailObject;
use App\DTO\Layers\LoginLinkGenerator;
use App\DTO\Layers\Mailer;
use App\DTO\Layers\RegisterAddress;
use App\DTO\Layers\RulesValidator;
use App\DTO\MainBuilder;
use App\DTO\Layers\Register as RegisterLayer;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\LoginLink\LoginLinkHandlerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use function PHPUnit\Framework\stringContains;

/**
 * Class Register
 * @package App\Controller
 * @Route("/register")
 */
class Register extends AbstractController
{
    /**
     * @var MainBuilder
     */
    private $mainBuilder;
    /**
     * @var DocumentManager
     */
    private $documentManager;
    /**
     * @var LoginLinkHandlerInterface
     */
    private $loginLinkHandler;
    /**
     * @var SessionInterface
     */
    private $session;

    /**
     * Register constructor.
     * @param MainBuilder $mainBuilder
     * @param DocumentManager $documentManager
     * @param LoginLinkHandlerInterface $loginLinkHandler
     * @param SessionInterface $session
     */
    public function __construct(MainBuilder $mainBuilder, DocumentManager $documentManager, LoginLinkHandlerInterface $loginLinkHandler, SessionInterface $session)
    {
        $this->mainBuilder = $mainBuilder;
        $this->documentManager = $documentManager;
        $this->loginLinkHandler = $loginLinkHandler;
        $this->session = $session;
    }

    /**
     * @Route("", name="register", methods={"GET"})
     */
    public function register()
    {
        return $this->render('register/register.html.twig');
    }

    /**
     * @Route("/finish", methods={"POST"}, name="registerFinish")
     * @param Request $request
     */
    public function registerFinish(Request $request)
    {
        return $this->redirectToRoute("index");
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/validate", name="validateRegister", methods={"POST"})
     */
    public function validateRegister(Request $request)
    {
        try {
            $registerData = json_decode($request->getContent(), true);

            if (!isset($registerData["user"])) {
                throw new \Exception("User field doesn't exist");
            }

            $email = new EmailObject();
            $email->setEmailAddress($registerData["user"]["email"])
                ->setTitle("Registro Lovelace");

            $main = $this->mainBuilder->build($this->documentManager);

            $main->addLayer(new RulesValidator($registerData));
            $main->addLayer(new RegisterLayer(new User(), $this->loginLinkHandler));
            $main->addLayer(new LoginLinkGenerator($this->loginLinkHandler));
            $main->addLayer(new Mailer($email));

            $main->run();

            return new JsonResponse($main->getResults(), Response::HTTP_OK);
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
     * @Route("/check", name="register_check")
     * @param Request $request
     */
    public function registerCheck(Request $request)
    {
        $expires = $request->query->get('expires');
        $username = $request->query->get('user');
        $hash = $request->query->get('hash');

        $user = $this->documentManager->getRepository(User::class)->findOneBy(['email' => $username]);


        // and render a template with the button
        return $this->render('security/processLogin.html.twig', [
            'expires' => $expires,
            'username' => $username,
            'hash' => $hash,
            'user' => $user
        ]);
    }

    /**
     * @Route("/address", name="register_address", methods={"GET", "POST"})
     * @param Request $request
     */
    public function registerAddress(Request $request)
    {
        $redirectUrl = $request->headers->get("referer");
        if ($redirectUrl && str_contains($redirectUrl, "/register/check")) {
            $this->session->getFlashBag()->add('success', "{$this->getUser()->getName()}, obrigado por confirmar o email. Por favor preencha os seus dados de endereço");
        }
        if ($request->getMethod() == "POST") {
            try {
                $registerData = json_decode($request->getContent(), true);
                $main = $this->mainBuilder->build($this->documentManager);

                $main->addLayer(new RulesValidator($registerData));
                $main->addLayer(new RegisterAddress($registerData, $this->getUser()));
                $main->run();
                return new JsonResponse($main->getResults(), Response::HTTP_OK);
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
        } else if ($request->getMethod() == "GET") {
            return $this->render('register/registerForm.html.twig');
        }
    }

    /**
     * @Route("/find/address", name="find_address")
     */
    public function findAddress()
    {
        $address = $this->documentManager->getRepository(Address::class)->findOneBy(["user" => $this->getUser()->getId()]);
        return new JsonResponse($address, Response::HTTP_OK);
    }

}