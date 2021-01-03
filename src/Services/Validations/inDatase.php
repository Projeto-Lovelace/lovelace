<?php
namespace App\Services\Validations;

use App\DTO\Main;
use App\Services\ServicesValidationInterface;

class inDatabase implements ServicesValidationInterface
{
    /**
     * @var Main
     */
    private $main;

    /**
     * Required constructor.
     * @param Main $main
     */
    public function __construct(Main $main)
    {
        $this->main = $main;
    }

    public function validate($data)
    {
        try {

            $inputValues = $this->main->getInputValues();
            $userRepository = $this->main->getDocumentManager()->getRepository(User::class)
            $user = $userRepository->findOneBy(["email"=> $inputValues["email"]])
            if(!empty($user)) {
                return true;

                $message = "<div style='text-align: center'><h1>Ola {$main->getUser()->getName()}</h1>
                <h3 style='margin-bottom: 50px'>"Email Encontrado"</h3>
               
                <h4 style='color: darkgreen'>Atenciosamente</h4>
                <h4 style='color: darkgreen'>Equipe Lovelace</h4>";
    
            $this->email->setMessage($message);
    


            }
            return false;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }

    public function apply()
    {
        // TODO: Implement apply() method.
    }
}