<?php
namespace App\DTO\Layers;

use App\DTO\Main;

interface LayerInterface
{
    public function exec(Main $main);
}