<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\Exception\RuntimeException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email as EmailSender;

use Symfony\Component\Routing\Annotation\Route;

class Email extends AbstractController
{
    /**
     * @Route("/email/{emailString}/{message}")
     * @param string $message
     * @param string $emailString
     * @param MailerInterface $mailer
     * @throws TransportExceptionInterface
     */
    public function sendEmail(MailerInterface $mailer, $message, $emailString)
    {
        try {
            $email = (new EmailSender())
                ->from('hborgesdasilva9294@gmail.com')
                ->to($emailString)
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Lovelace Mailer!')
                ->text($message)
                ->html("<p>{$message}</p>");

            $mailer->send($email);
            return new JsonResponse("email enviado para {$emailString}");
        } catch (RuntimeException $exception){
            return new JsonResponse([
                "message" => $exception->getMessage(),
                "line" => $exception->getLine()
            ]);
        }

    }
}