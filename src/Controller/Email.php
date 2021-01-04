<?php

namespace App\Controller;
use App\DTO\Email as EmailObject;
use App\DTO\Layers\AddUserFromFindInDatabase;
use App\DTO\Layers\CreateEmail;
use App\DTO\Layers\CreateRegisterEmailMessage;
use App\DTO\Layers\FindInDatabase;
use App\DTO\Layers\LoginLinkGenerator;
use App\DTO\Layers\Mailer;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use HttpRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\RuntimeException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email as EmailSender;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\LoginLink\LoginLinkHandlerInterface;
use function Symfony\Component\Translation\t;

class Email extends AbstractController
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
     * Email constructor.
     * @param MainBuilder $mainBuilder
     * @param DocumentManager $documentManager
     * @param LoginLinkHandlerInterface $loginLinkHandler
     */
    public function __construct(MainBuilder $mainBuilder, DocumentManager $documentManager, LoginLinkHandlerInterface $loginLinkHandler)
    {
        $this->mainBuilder = $mainBuilder;
        $this->documentManager = $documentManager;
        $this->loginLinkHandler = $loginLinkHandler;
    }

    /**
     * @Route("/email/resend", methods={"POST"})
     * @param Request $request
     */
    public function resendEmail(Request $request)
    {
        try {
            $input = json_decode($request->getContent());

            if (isset($input->email)) {
                $main = $this->mainBuilder->build($this->documentManager);

                $main->addLayer(new FindInDatabase("User", "email", $input->email, "findOneBy"));
                $main->addLayer(new AddUserFromFindInDatabase());
                $main->addLayer(new LoginLinkGenerator($this->loginLinkHandler));
                $main->addLayer(new CreateRegisterEmailMessage());
                $main->addLayer(new CreateEmail("Registro Lovelace"));
                $main->addLayer(new Mailer());
                $main->run();
            }
            return new JsonResponse(["message" => "Email reenviado para {$input->email}, favor confirmar"], 200);
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