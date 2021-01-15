<?php


namespace App\DTO;


class Email
{
    /**
     * @var string $message
     */
    private $message;

    /**
     * @var string $emailAddress;
     */
    private $emailAddress;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Email
     */
    public function setMessage(string $message): Email
    {
        $this->message = preg_replace( "/|  |\n/", "", $message);
        return $this;
    }

    /**
     * @param string $emailAddress
     * @return Email
     */
    public function setEmailAddress(string $emailAddress): Email
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $title
     * @return Email
     */
    public function setTitle(string $title): Email
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}