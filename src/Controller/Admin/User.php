<?php


namespace App\Controller\Admin;


use App\Document\User as UserDocument;
use App\DTO\Layers\FindInDatabase;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

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
     * User constructor.
     * @param MainBuilder $mainBuilder
     * @param DocumentManager $manager
     */
    public function __construct(MainBuilder $mainBuilder, DocumentManager $manager)
    {
        $this->mainBuilder = $mainBuilder;
        $this->manager = $manager;
    }

    /**
     * @Route("")
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

            $main->run();

            $user = $main->getResults()[0]["findDocument"];

            if (!$user) {
                $user = $this->getUser();
            }
            return $this->render("admin/userData.html.twig", ["user" => $user]);
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
}