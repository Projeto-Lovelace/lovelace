<?php


namespace App\DTO\Layers;


use App\Document\Address;
use App\Document\User;
use App\DTO\Main;

class FindUserAddress implements LayerInterface
{
    /**
     * @var string
     */
    private $userId;

    /**
     * FindUserAddress constructor.
     * @param string $userId
     */
    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    public function exec(Main $main)
    {
        $documentManager = $main->getDocumentManager();
        $addressRepository = $documentManager->getRepository(Address::class);
        $address = $addressRepository->findOneBy(['user' => $this->userId]);
        $main->addResults(['address' => $address]);
    }
}