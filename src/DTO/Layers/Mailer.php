<?php
namespace App\DTO\Layers;

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
        $message = preg_replace( "/|  |\n/", "", "<div style='text-align: center'>
            <h1>Ola {$this->name}</h1>
            <h3 style='margin-bottom: 50px'>Informamos que o cadastro esta processo de construçao.</h3>
            <h3 style='margin-bottom: 25px'>Tente novamente mais tarde</h3>
            <a style='color: #0a2a45' href='http://projetolovelace.com'>projetolovelace.com</a></div>
            <h4 style='color: darkgreen'>Atenciosamente</h4>
            <h4 style='color: darkgreen'>Equipe Lovelace</h4>");

        $postFields = "{
                \"personalizations\": [
                    {
                        \"to\": [
                            {
                                \"email\": \"hborgesdasilva9294@gmail.com\"
                            }
                        ],
                        \"subject\": \"Registro Lovelace\"
                    }
                ],
                \"from\": {
                    \"email\": \"{$this->email}\"
                },
                \"content\": [
                    {
                        \"type\": \"text/html\",
                        \"value\": \"{$message}\"
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
            return "Email enviado para {$this->email}";
        }
    }
}