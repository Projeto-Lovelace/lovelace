<?php


namespace App\DTO\Layers;


use App\Document\Volunteer;
use App\DTO\Main;

class FormatVolunteersPhone implements LayerInterface
{
    /**
     * @var array
     */
    private $volunteers;

    /**
     * FormatVolunteersPhone constructor.
     * @param array $volunteers
     */
    public function __construct(array $volunteers)
    {
        $this->volunteers = $volunteers;
    }

    public function exec(Main $main)
    {
        /** @var Volunteer $volunteer */
        foreach ($this->volunteers as $volunteer) {
            $phone = preg_replace("/[^0-9]/", "", $volunteer->getPhone() );
            $ddd = substr($phone,0, 2);
            if($ddd == "55"){
                $phone = substr($phone, 2);
            }
            $volunteer->setPhone("55" . $phone);
        }
        $main->addResults(["volunteers" => $this->volunteers]);
    }
}