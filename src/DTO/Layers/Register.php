<?php


namespace App\DTO\Layers;


use App\Document\User;
use App\DTO\Main;
use App\Services\Map\DataMap;
use Symfony\Component\Security\Http\LoginLink\LoginLinkHandlerInterface;

class Register implements \App\DTO\Layers\LayerInterface
{
    /**
     * @var User
     */
    private $user;

    /**
     * Register constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function exec(Main $main)
    {
        try {
            $registerData = $main->getInputValues()["user"] ?: [];
            $registerRole = DataMap::REGISTER_ROLES[$registerData["type"]];
            $this->user->setName($registerData["name"])
                ->setEmail($registerData["email"])
                ->setPassword(md5($registerData["password"]))
                ->setEmailValidated(false)
                ->addRole("ROLE_USER")
                ->addRole($registerRole)
                ->setRegisterApproved(false);
            $main->getDocumentManager()->persist($this->user);
            $main->getDocumentManager()->flush();
            $main->setUser($this->user);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }
}