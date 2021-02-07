<?php


namespace App\DTO\Layers;


use App\Document\User;
use App\DTO\Main;

class ApproveUserRegister implements LayerInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * ApproveUserRegister constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function exec(Main $main)
    {
        $documentManager = $main->getDocumentManager();
        $userRepository = $documentManager->getRepository(User::class);

        $user = $userRepository->find($this->data['user']);
        $user->setRegisterApproved(true);

        $documentManager->persist($user);
        $documentManager->flush();
    }
}