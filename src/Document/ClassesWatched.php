<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class ClassesWatched
 * @package App\Document
 * @MongoDB\Document
 */
class ClassesWatched implements \JsonSerializable
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Field
     */
    private $class;

    /**
     * @MongoDB\Field
     */
    private $student;

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
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     * @return ClassesWatched
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * @param mixed $student
     * @return ClassesWatched
     */
    public function setStudent($student)
    {
        $this->student = $student;
        return $this;
    }

    /**
     * @return mixed|void
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}