<?php
namespace App\Services\Validations;

use App\DTO\Main;
use App\Services\ServicesValidationInterface;

class Required implements 
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
            if(!empty($data)) {
                return true;
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