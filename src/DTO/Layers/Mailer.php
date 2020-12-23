<?php
namespace App\DTO\Layers;

use App\DTO\Main;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\Exception\RuntimeException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email as EmailSender;

class Mailer implements LayerInterface
{
    /**
     * @var MailerInterface
     */
    private $mailer;
    private $email;
    /**
     * @var string
     */
    private $name;

    /**
     * Mailer constructor.
     * @param MailerInterface $mailer
     * @param string $email
     * @param string $name
     */
    public function __construct(MailerInterface $mailer, string $email, string $name="")
    {
        $this->mailer = $mailer;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * @param Main $main
     * @return string
     * @throws TransportExceptionInterface
     */
    public function exec(Main $main)
    {
        try {
            $email = (new EmailSender())
                ->from('hborgesdasilva9294@gmail.com')
                ->to($this->email)
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Projeto Lovelace!')
                ->text("Em construçao")
                ->html("
                        <h1>Ola {$this->name}</h1>
                        <h3 style='margin-bottom: 50px'>Informamos que o cadastro esta processo de contruçao.</h3>
                        <p style='margin-bottom: 25px'>Tente novamente mais tarde</p>                    
                        <p style='color: darkgreen'>Atenciosamente,</p>
                        <p style='color: darkgreen'>Equipe Lovelace</p>
                        <a style='color: #0a2a45' href='http://projetolovelace.com'>projetolovelace.com</a>
                    ");

            $this->mailer->send($email);
            return "email enviado para {$this->email}";
        } catch (RuntimeException $exception){
            throw new RuntimeException([
                "message" => $exception->getMessage(),
                "line" => $exception->getLine()
            ]);
        }
    }
}