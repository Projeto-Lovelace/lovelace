<?php
namespace App\Services\User;

class UserValidationMap
{
    const VALIDATIONS = [
        "user.name" => "required",
        "user.email" => ["required", "notInDatabase"],
        "user.password" => "required",
        "address.cep" => "required",
        "address.street" => "required",
        "address.city" => "required",
        "address.state" => "required"
    ];

    const MESSAGES = [
        "user.email" => [
            "NotInDatabase" => "Email ja cadastrado"
        ],
    ];
}