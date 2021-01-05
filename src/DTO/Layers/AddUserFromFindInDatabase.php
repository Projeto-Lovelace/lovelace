<?php


namespace App\DTO\Layers;


use App\DTO\Main;

class AddUserFromFindInDatabase implements LayerInterface
{
    public function exec(Main $main)
    {
        try {
            $findInDatabase = array_map(function ($result) {
                if (key($result) == "findDocument") {
                    return $result;
                }
            }, $main->getResults());

            $findInDatabase = array_shift($findInDatabase);

            $user = $findInDatabase["findDocument"];

            if($user) {
                $main->setUser($user);
            } else {
                throw new \Exception("Usuário não encontrado");
            }
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}