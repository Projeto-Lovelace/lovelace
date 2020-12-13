<?php


use App\DTO\Main;

class RegisterUser implements LayerInterface
{
    /**
     * @var array
     */
    private $registerData;

    /**
     * RegisterUser constructor.
     * @param array $registerData
     */
    public function __construct(array $registerData)
    {
        $this->registerData = $registerData;
    }

    public function exec(Main $main): array
    {
        return $this->registerData;
    }
}