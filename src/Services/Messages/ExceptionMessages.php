<?php


namespace App\Services\Messages;


class ExceptionMessages
{
    private $emailNotValidatedMessage;
//href='{$_SERVER['HTTP_ORIGIN']}/register/resend/email'
    public function __construct()
    {
        $this->emailNotValidatedMessage = "
        <h4 class='m-0'>Email não confirmado</h4> 
        <p class='m-0' style='font-size: 15px'>se voce não recebeu o email de confirmação 
        <a style='text-decoration: none !important; color: #c43d4b; font-weight: bold; cursor: pointer'
        data-toggle='modal' data-target='#modal'>clique aqui</a>
        </p>";
    }

    /**
     * @return string
     */
    public function getEmailNotValidatedMessage(): string
    {
        return $this->emailNotValidatedMessage;
    }

    public function translate($message): string
    {
        $translations = [
            "Username could not be found." => "Usuário não encontrado."
        ];
        return $translations[$message] ?? $message;
    }
}