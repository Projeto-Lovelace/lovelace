<?php
namespace App\Controller;

use App\DTO\Layers\Mailer;
use App\DTO\Layers\RulesValidator;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

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
     * @var MailerInterface
     */
    private $mailer;

    /**
     * Register constructor.
     * @param MainBuilder $mainBuilder
     * @param DocumentManager $documentManager
     * @param MailerInterface $mailer
     */
    public function __construct(MainBuilder $mainBuilder, DocumentManager $documentManager, MailerInterface $mailer)
    {
        $this->mainBuilder = $mainBuilder;
        $this->documentManager = $documentManager;
        $this->mailer = $mailer;
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

            if(!isset($registerData["register"])){
                throw new \Exception("Register field doesn't exist");
            }

            $main = $this->mainBuilder->build($this->documentManager);

            $main->addLayer(new RulesValidator($registerData));
            $main->addLayer(new Mailer($this->mailer, $registerData["register"]["email"], $registerData["register"]["name"]));

            $main->run();

            return new JsonResponse($main->getResults(), Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse(
                [
                    "message" => $exception->getMessage(),
                    "more" => $exception->getTrace(),
                    "file" => $exception->getFile(),
                    "line" => $exception->getLine()
                ], $exception->getCode()
            );
        }
    }
}