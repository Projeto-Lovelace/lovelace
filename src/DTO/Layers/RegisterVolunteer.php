<?php


namespace App\DTO\Layers;


use App\Document\Volunteer;
use App\DTO\Main;

class RegisterVolunteer implements LayerInterface
{

    public function exec(Main $main)
    {
        try {
            $registerData = $main->getInputValues()["volunteer"] ?: [];
            $volunteer = new Volunteer();
            $volunteer->setName($registerData["name"])
                ->setEmail($registerData["email"])
                ->setSpecialty($registerData["specialty"])
                ->setExtra($registerData["extra"])
                ->setPhone($registerData["phone"]);
            $main->getDocumentManager()->persist($volunteer);
            $main->getDocumentManager()->flush();
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }
}