<?php
namespace App\Services;

use App\DTO\Main;

interface ServicesValidationInterface
{
    public function __construct(Main $main);
    public function validate($data);
    public function apply();
}