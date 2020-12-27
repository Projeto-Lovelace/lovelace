<?php


namespace App\Security;


use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AccessLinkSuccess implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * AccessLinkSuccess constructor.
     * @param DocumentManager $documentManager
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        /** @var User $user */
        $user = $token->getUser();
        $user->setEmailValidated(true);
        $this->documentManager->persist($user);
        $this->documentManager->flush();
        return new RedirectResponse("/portal");
    }
}