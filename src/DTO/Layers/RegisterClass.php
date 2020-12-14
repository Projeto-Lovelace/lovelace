<?php
namespace App\DTO\Layers;

use App\DTO\Layers\LayerInterface;
use App\DTO\Main;

class RegisterClass implements LayerInterface
{
    public function exec(Main $main): string
    {
        return "testao";
    }
}