<?php
namespace App\Services\User;

class UserValidationMap
{
    const VALIDATIONS = [
        "register.name" => "required",
        "register.email" => "required",
        "register.password" => "required"
    ];
}