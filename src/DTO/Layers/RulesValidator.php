<?php
namespace App\DTO\Layers;

use App\DTO\Main;
use App\Services\User\UserValidationMap;
use App\DTO\Layers\LayerInterface;
use Symfony\Component\HttpFoundation\Response;

class RulesValidator implements LayerInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function exec(Main $main)
    {
        $result = [];
        foreach (UserValidationMap::VALIDATIONS as $field => $validation){
            $fields = $this->arrayToStringRecursive($this->data)["array"];
            foreach ($fields as $key => $value){
                if($field == $key){
                    $validation = str_replace('_', '', ucwords($validation, '\_'));
                    $validationClass = 'App\\Services\\Validations\\'.$validation;
                    if(class_exists($validationClass)) {
                        $validationClass = new $validationClass($main);
                        if($validationClass->validate($value)) {
                            $validationClass->apply();
                            $result["validation"][] = [
                                "message" => "Validation {$validation} field {$field} passed",
                                "field" => $field,
                                "validation" => $validation
                            ];
                        } else {
                            $result["validation"]["exception"][] = [
                                "message" => "Validation {$validation} field {$field} did not pass",
                                "field" => $field,
                                "validation" => $validation
                            ];
                        }
                    }
                }
            }
        }
        if(array_key_exists("exception", $result["validation"])){
            throw new \Exception(json_encode($result["validation"]["exception"]), Response::HTTP_NOT_ACCEPTABLE);
        }
        $main->setInputValues($this->data);
        return $result;
    }

    public function arrayToStringRecursive($array, $delimeter = '.', $parents = array(), $recursive = false, $arrayValues = array())
    {
        $result = '';

        foreach ($array as $key => $value) {
            $group = $parents;
            array_push($group, $key);
            // check if value is an array
            if (is_array($value)) {
                if ($merge = $this->arrayToStringRecursive($value, $delimeter, $group, true)["string"]) {
                    $result = $result . $merge;
                }
                continue;
            }

            if (!empty($parents)) {
                $result = $result . PHP_EOL . implode($delimeter, $group) . ":" . $value;
                continue;
            }

            $result = $result . PHP_EOL . $key . ":" . $value;
        }

        if (!$recursive) {
            $result = substr($result, 1);
        }

        array_push($arrayValues, $this->setFieldValues($result));
        return array("string" => $result, "array" => end($arrayValues));
    }

    private function setFieldValues($fields)
    {
        $fields = explode(PHP_EOL, $fields);
        $result = [];
        foreach ($fields as $field){
            if($field !== "") {
                $values = explode(":", $field);
                $result[$values[0]] = $values[1];
            }
        }
        return $result;
    }
}