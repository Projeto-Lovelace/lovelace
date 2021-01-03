<?php


namespace App\DTO\Layers;


use App\DTO\Main;

class AddUserFromFindInDatabase implements LayerInterface
{
    public function exec(Main $main)
    {
        $findInDatabase = array_map(function ($result){
            if(key($result) == "findDocument"){
                return $result;
            }
        }, $main->getResults());

        $findInDatabase = array_shift($findInDatabase);

        $user = $findInDatabase["findDocument"];
        $main->setUser($user);
    }
}