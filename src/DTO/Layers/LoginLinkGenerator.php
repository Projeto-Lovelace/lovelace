<?php


namespace App\DTO\Layers;


use App\DTO\Main;
use Symfony\Component\Security\Http\LoginLink\LoginLinkHandlerInterface;

class LoginLinkGenerator implements LayerInterface
{
    /**
     * @var LoginLinkHandlerInterface
     */
    private $loginLinkHandler;

    /**
     * LoginLinkGenerator constructor.
     * @param LoginLinkHandlerInterface $loginLinkHandler
     */
    public function __construct(LoginLinkHandlerInterface $loginLinkHandler)
    {
        $this->loginLinkHandler = $loginLinkHandler;
    }

    public function exec(Main $main)
    {
        $loginLinkDetails = $this->loginLinkHandler->createLoginLink($main->getUser());
        $main->setLoginLinkDetails($loginLinkDetails->getUrl());
    }
}