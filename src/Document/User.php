<?php
namespace App\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class User
 * @MongoDB\Document
 */
class User implements UserInterface
{
    /**
     * @MongoDB\Id(type="string")
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="raw")
     */
    protected $roles = [];

    /**
     * @MongoDB\Field(type="boolean")
     */
    protected $emailValidated;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $photoPath;

    /**
     * @MongoDB\Field(type="boolean")
     */
    protected $registerApproved;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    /**
     * @param $role
     */
    public function addRole($role): self
    {
        $this->roles[] = $role;
        return $this;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * @return mixed
     */
    public function isEmailValidated()
    {
        return $this->emailValidated;
    }

    /**
     * @param mixed $emailValidated
     */
    public function setEmailValidated($emailValidated)
    {
        $this->emailValidated = $emailValidated;
        return $this;
    }

    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPhotoPath()
    {
        return $this->photoPath;
    }

    /**
     * @param string $photoPath
     * @return User
     */
    public function setPhotoPath($photoPath): self
    {
        $this->photoPath = $photoPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function isRegisterApproved()
    {
        return $this->registerApproved;
    }

    /**
     * @param mixed $registerApproved
     * @return User
     */
    public function setRegisterApproved($registerApproved)
    {
        $this->registerApproved = $registerApproved;
        return $this;
    }
}