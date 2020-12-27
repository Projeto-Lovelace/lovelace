<?php
namespace App\DTO\Layers;

use App\DTO\Email;
use App\DTO\Main;

class Mailer implements LayerInterface
{
    /**
     * @var Email $email
     */
    private $email;

    /**
     * Mailer constructor.
     * @param Email $email
     */
    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    /**
     * @param Main $main
     * @return string
     */
    public function exec(Main $main)
    {
        $message = "<div style='text-align: center'><h1>Ola {$main->getUser()->getName()}</h1>
            <h3 style='margin-bottom: 50px'>Para confirmar o seu cadastro clique no link abaixo</h3>
            <a style='color: #0a2a45' href='{$main->getLoginLinkDetails()}'>CONFIRMAR</a></div>
            <h4 style='color: darkgreen'>Atenciosamente</h4>
            <h4 style='color: darkgreen'>Equipe Lovelace</h4>";

        $this->email->setMessage($message);

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

//        if($_SERVER["APP_ENV"] != "prod"){
//            return $this->email->getMessage();
//        }

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

        if ($err || $response != "") {
            throw new \Exception("Erro ao enviar email: " . $err ?: $response);
        } else {
            return "Email enviado para {$this->email->getEmailAddress()}";
        }
    }
}