<?php


namespace App\DTO\Layers;


use App\DTO\Email as EmailObject;
use App\DTO\Main;

class CreateEmail implements LayerInterface
{
    private $title;
    private $message;
    /**
     * @var string
     */
    private $address;

    /**
     * CreateRegisterEmail constructor.
     * @param $title
     * @param $message
     * @param string $address
     */
    public function __construct($title, $message = "", $address = "")
    {
        $this->title = $title;
        $this->message = $message;
        $this->address = $address;
    }

    public function exec(Main $main)
    {
        $results = $main->getResults();
        $findEmailMessage = array_filter($results, function ($value) {
           if(key($value) == "emailMessage"){
               return $value;
           }
        });
        $emailMessage = array_shift($findEmailMessage);

        $email = new EmailObject();
        $email->setEmailAddress($this->address ?: $main->getUser()->getEmail())
            ->setTitle($this->title)
            ->setMessage($this->message ?: $emailMessage["emailMessage"]);
        return ["email" => $email];
    }
}