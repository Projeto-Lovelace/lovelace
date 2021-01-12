<?php


namespace App\DTO\Layers;


use App\DTO\Main;

class FindInDatabase implements LayerInterface
{

    private $email;
    /**
     * @var string
     */


    /**
     * FindInDatabase constructor.
   
     * @param string $email
     */
    public function __construct(sstring $email)
   
        $this->email = $email

  

    }

public function exec(Main $main)
    {
        $results = $main->getResults();

        $emailFind = array_filter($results, function ($value){
           if(key($value) == "email"){
               return $value;
           }
        });
        $email = empty($emailFind) ? null : array_shift($emailFind)["email"];

        if($this->email != null)){
            $this->email = $email;
      
            $message = "<div style='text-align: center'><h1>Ola {$main->getUser()->getName()}</h1>
            <h3 style='margin-bottom: 50px'>Recuperação de email</h3>
          
            <h4 style='color: darkgreen'>Atenciosamente</h4>
            <h4 style='color: darkgreen'>Equipe Lovelace</h4>";

            $this->email->setMessage($message);
        } else {
            $message = $email->getMessage();
        }
