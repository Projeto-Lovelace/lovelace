<?php


namespace App\DTO\Layers;


use App\Document\User;
use App\DTO\Main;
use Symfony\Component\Security\Http\LoginLink\LoginLinkHandlerInterface;

class Register implements \App\DTO\Layers\LayerInterface
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var LoginLinkHandlerInterface
     */
    private $loginLinkHandler;

    /**
     * Register constructor.
     * @param User $user
     * @param LoginLinkHandlerInterface $loginLinkHandler
     */
    public function __construct(User $user, LoginLinkHandlerInterface $loginLinkHandler)
    {
        $this->user = $user;
        $this->loginLinkHandler = $loginLinkHandler;
    }

    public function exec(Main $main)
    {
        try {
            $registerData = $main->getInputValues()["user"] ?: [];
            $this->user->setName($registerData["name"])
                ->setEmail($registerData["email"])
                ->setPassword(md5($registerData["password"]))
                ->setEmailValidated(false)
                ->setRoles("ROLE_USER");
            $main->getDocumentManager()->persist($this->user);
            $main->getDocumentManager()->flush();
            $main->setUser($this->user);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }
}