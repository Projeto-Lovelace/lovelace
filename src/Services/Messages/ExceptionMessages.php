<?php


namespace App\Services\Messages;


class ExceptionMessages
{
    const REGISTER_NOT_APPROVED = "<h4 class='m-0'>Seu cadastro ainda não foi confirmado</h4> 
        <p class='m-0' style='font-size: 15px'>Aguarde ate que confirmemos o seu cadastro
        </p>";

    const EMAIL_NOT_VALIDATED = "
        <h4 class='m-0'>Email não confirmado</h4> 
        <p class='m-0' style='font-size: 15px'>se voce não recebeu o email de confirmação 
        <a style='text-decoration: none !important; color: #c43d4b; font-weight: bold; cursor: pointer'
        data-toggle='modal' data-target='#modal'>clique aqui</a>
        </p>";

    public function translate($message): string
    {
        $translations = [
            "Username could not be found." => "Usuário não encontrado."
        ];
        return $translations[$message] ?? $message;
    }
}