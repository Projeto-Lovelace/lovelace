<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class StudentWatchedVideoClass
 * @package App\Document
 * @MongoDB\Document
 */
class StudentWatchedVideoClass implements \JsonSerializable
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
     * @MongoDB\Field
     */
    private $percentage;

    /**
     * @MongoDB\Field
     */
    private $timeWatched;

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
     * @return StudentWatchedVideoClass
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
     * @return StudentWatchedVideoClass
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

    /**
     * @return mixed
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param mixed $percentage
     * @return StudentWatchedVideoClass
     */
    public function setPercentage($percentage): StudentWatchedVideoClass
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeWatched()
    {
        return $this->timeWatched;
    }

    /**
     * @param mixed $timeWatched
     * @return StudentWatchedVideoClass
     */
    public function setTimeWatched($timeWatched): StudentWatchedVideoClass
    {
        $this->timeWatched = $timeWatched;
        return $this;
    }
}