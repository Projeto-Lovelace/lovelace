<?php
namespace App\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Classes
 * @package App\Document
 * @MongoDB\Document
 */
class Classes implements \JsonSerializable
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Field
     */
    private $title;

    /**
     * @MongoDB\Field
     */
    private $startDate;

    /**
     * @MongoDB\Field
     */
    private $endDate;

    /**
     * @MongoDB\Field
     */
    private $videoUrl;

    /**
     * @MongoDB\Field
     */
    private $videoCode;

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Classes
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     * @return Classes
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     * @return Classes
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * @param mixed $videoUrl
     * @return Classes
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'title' => $this->getTitle(),
            'start' => $this->getStartDate(),
            'end' => $this->getEndDate(),
            'allDay' => false
        ];
    }

    /**
     * @return mixed
     */
    public function getVideoCode()
    {
        return $this->videoCode;
    }

    /**
     * @param mixed $videoCode
     * @return Classes
     */
    public function setVideoCode($videoCode)
    {
        $this->videoCode = $videoCode;
        return $this;
    }
}