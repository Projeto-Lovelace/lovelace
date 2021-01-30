<?php


namespace App\Services\Map;


class DataMap
{
    const REGISTER_TYPES = [
      "student" => "aluno",
      "volunteer" => "voluntário"
    ];

    const REGISTER_ROLES = [
        "student" => "ROLE_STUDENT",
        "volunteer" => "ROLE_VOLUNTEER"
    ];
}