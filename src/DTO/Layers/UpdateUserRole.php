<?php

namespace App\DTO\Layers;

use App\Document\User;
use App\DTO\Main;

class UpdateUserRole implements LayerInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * UpdateUserRole constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function exec(Main $main)
    {
        $map = [
            'switch-admin' => 'ROLE_ADMIN',
            'switch-volunteer' => 'ROLE_VOLUNTEER',
            'switch-student' => 'ROLE_STUDENT'
        ];

        $documentManager = $main->getDocumentManager();
        $userRepository = $documentManager->getRepository(User::class);
        $user = $userRepository->find($this->data['user']);
        $role = $map[$this->data['role']];
        $isActive = $this->data['active'];

        if (!in_array($role, $user->getRoles()) && $isActive) {
            $user->addRole($role);
        } else if (in_array($role, $user->getRoles()) && !$isActive) {
            $user->removeRole($role);
        }

        $documentManager->persist($user);
        $documentManager->flush();
    }
}