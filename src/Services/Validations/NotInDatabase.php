<?php


namespace App\Services\Validations;


use App\DTO\Main;
use App\Services\ServicesValidationInterface;
use Doctrine\DBAL\Exception\DatabaseObjectExistsException;
use Doctrine\ODM\MongoDB\MongoDBException;

class NotInDatabase implements ServicesValidationInterface
{
    /**
     * @var Main
     */
    private $main;

    /**
     * NotInDatabase constructor.
     * @param Main $main
     */
    public function __construct(Main $main)
    {
        $this->main = $main;
    }

    public function validate($data, $field)
    {
        try {
            $fieldArray = explode(".", $field);
            $fieldClassName = ucwords(array_shift($fieldArray));
            $repository = $this->main->getDocumentManager()->getRepository("App\\Document\\{$fieldClassName}");
            $objectFound = $repository->findOneBy([end($fieldArray) => $data]);
            if(!$objectFound) {
                return true;
            } else {
                throw new \Exception(end($fieldArray) . " exists", 409);
            }
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage(), $exception->getCode() ?: 500);
        }
    }

    public function apply()
    {
        // TODO: Implement apply() method.
    }
}