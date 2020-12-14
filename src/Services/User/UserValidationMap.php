<?php
namespace App\Services\User;

class UserValidationMap
{
    const VALIDATIONS = [
        "register.name" => "required",
        "register.age" => "required"
    ];
}