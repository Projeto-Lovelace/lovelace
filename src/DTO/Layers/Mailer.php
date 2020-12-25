<?php
namespace App\DTO\Layers;

use App\DTO\Email;
use App\DTO\Main;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;

class Mailer implements LayerInterface
{
    /**
     * @var MailerInterface
     */
    private $mailer;
    /**
     * @var Email $email
     */
    private $email;

    /**
     * Mailer constructor.
     * @param MailerInterface $mailer
     * @param Email $email
     */
    public function __construct(MailerInterface $mailer, Email $email)
    {
        $this->mailer = $mailer;
        $this->email = $email;
    }

    /**
     * @param Main $main
     * @return string
     * @throws TransportExceptionInterface
     */
    public function exec(Main $main)
    {
        $postFields = "{
                \"personalizations\": [
                    {
                        \"to\": [
                            {
                                \"email\": \"{$this->email->getEmailAddress()}\"
                            }
                        ],
                        \"subject\": \"{$this->email->getTitle()}\"
                    }
                ],
                \"from\": {
                    \"email\": \"hborgesdasilva9294@gmail.com\",
                    \"name\": \"Projeto Lovelace\"
                },
                \"content\": [
                    {
                        \"type\": \"text/html\",
                        \"value\": \"{$this->email->getMessage()}\"
                    }
                ]
            }";

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://rapidprod-sendgrid-v1.p.rapidapi.com/mail/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postFields,
            CURLOPT_HTTPHEADER => [
                "content-type: application/json",
                "x-rapidapi-host: {$_SERVER['MAIL_HOST']}",
                "x-rapidapi-key: {$_SERVER['MAIL_API_KEY']}"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            throw new \Exception("Erro ao enviar email: " . $err);
        } else {
            return "Email enviado para {$this->email->getEmailAddress()}";
        }
    }
}