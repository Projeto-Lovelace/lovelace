<?php


use App\DTO\Main;

interface LayerInterface
{
    public function exec(Main $main);
}