<?php
namespace App\Services\Map;

class ValidationMap
{
    const VALIDATIONS = [

        # USER
        "user.name" => "required",
        "user.email" => ["required", "notInDatabase"],
        "user.password" => "required",

        # ADDRESS
        "address.cep" => "required",
        "address.street" => "required",
        "address.city" => "required",
        "address.state" => "required",

        # VOLUNTEER
        "volunteer.name" => "required",
        "volunteer.email" => "required"
    ];

    const MESSAGES = [
        "user.email" => [
            "NotInDatabase" => "Email ja cadastrado"
        ],
    ];
}