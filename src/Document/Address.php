<?php

namespace App\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Address
 * @MongoDB\Document
 */
class Address implements \JsonSerializable
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Field(type="string")
     */
    private $user;

    /**
     * @MongoDB\Field(type="string")
     */
    private $street;

    /**
     * @MongoDB\Field
     */
    private $city;

    /**
     * @MongoDB\Field
     */
    private $state;

    /**
     * @MongoDB\Field
     */
    private $number;

    /**
     * @MongoDB\Field
     */
    private $cep;

    /**
     * @MongoDB\Field
     */
    private $complement;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Address
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return Address
     */
    public function setUser(string $user): Address
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return Address
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     * @return Address
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param mixed $complement
     * @return Address
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}