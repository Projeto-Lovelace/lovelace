<?php


namespace App\DTO\Layers;


use App\DTO\Main;

class CreateRegisterEmailMessage implements LayerInterface
{

    /**
     * CreateRegisterEmailMessage constructor.
     */
    public function __construct()
    {
    }

    public function exec(Main $main)
    {
        $emailMessage = "<div style='text-align: center'><h1>Ola {$main->getUser()->getName()}</h1>
            <h3 style='margin-bottom: 50px'>Para confirmar o seu cadastro clique no link abaixo</h3>
            <a style='color: #0a2a45' href='{$main->getLoginLinkDetails()}'>CONFIRMAR</a></div>
            <h4 style='color: darkgreen'>Atenciosamente</h4>
            <h4 style='color: darkgreen'>Equipe Lovelace</h4>";

        $main->addResults(["emailMessage" => $emailMessage]);
    }
}