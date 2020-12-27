<?php


namespace App\DTO\Layers;


use App\Document\Address;
use App\DTO\Main;

class RegisterAddress implements LayerInterface
{
    private $data;
    private $user;

    /**
     * RegisterAddress constructor.
     * @param $data
     * @param $user
     */
    public function __construct($data, $user)
    {
        $this->data = $data;
        $this->user = $user;
    }

    public function exec(Main $main)
    {
        $address = $main->getDocumentManager()->getRepository(Address::class)->findOneBy(["user" => $this->user->getId()]);
        if(!$address){
            $address = new Address();
        }
        $address->setUser($this->user->getId())
            ->setCep($this->data["address"]["cep"])
            ->setCity($this->data["address"]["city"])
            ->setState($this->data["address"]["state"])
            ->setComplement($this->data["address"]["complement"])
            ->setNumber($this->data["address"]["number"])
            ->setStreet($this->data["address"]["street"]);
        $main->getDocumentManager()->persist($address);
        $main->getDocumentManager()->flush();
    }
}