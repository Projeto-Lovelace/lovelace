<?php

namespace App\DTO\Layers;

use App\Document\User;
use App\DTO\Layers\LayerInterface;
use App\DTO\Main;
use App\Services\Map\ValidationMap;
use Symfony\Component\HttpFoundation\Response;

class RulesValidator implements LayerInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var array
     */
    private $validation = [];

    private $validatedFields = [];

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function exec(Main $main)
    {
        foreach (ValidationMap::VALIDATIONS as $field => $validation) {
            $fields = $this->arrayToStringRecursive($this->data)["array"];
            foreach ($fields as $key => $value) {
                if (is_string($validation)) {
                    $this->executeValidation($key, $value, $field, $main, $validation);
                }
                if (is_array($validation)) {
                    foreach ($validation as $validationItem) {
                        $this->executeValidation($key, $value, $field, $main, $validationItem);
                    }
                }
            }

        }
        if (isset($this->validation["validation"]) && array_key_exists("exception", $this->validation["validation"])) {
            $message = [];
            foreach ($this->validation["validation"]["exception"] as $exception) {
                $field = $exception["field"];
                $validation = $exception["validation"];
                if (isset(ValidationMap::MESSAGES[$field][$validation])) {
                    $message["text"][] = ValidationMap::MESSAGES[$field][$validation];
                    $message["field"][] = $field;
                }
            }
            $message = array_filter($message);
            if ($message) {
                $this->validation["validation"]["exception"][] = ["messages" => $message];
            }
            throw new \Exception(json_encode($this->validation["validation"]["exception"]), Response::HTTP_NOT_ACCEPTABLE);
        }
        $main->setInputValues($this->data);
        return $this->validation;
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
        foreach ($fields as $field) {
            if ($field !== "") {
                $values = explode(":", $field);
                $result[$values[0]] = $values[1];
            }
        }
        return $result;
    }

    private function executeValidation($key, $value, $field, Main $main, $validation)
    {
        if ($field == $key) {
            $validation = str_replace('_', '', ucwords($validation, '\_'));
            $validationClass = 'App\\Services\\Validations\\' . $validation;
            if (class_exists($validationClass)) {
                $validationClass = new $validationClass($main);
                if ($validationClass->validate($value, $field)) {
                    $validationClass->apply();
                    $this->validation["validation"][] = [
                        "message" => "Validation {$validation} field {$field} passed",
                        "field" => $field,
                        "validation" => $validation
                    ];
                } else {
                    if(!in_array($field, $this->validatedFields)) {
                        $this->validation["validation"]["exception"][] = [
                            "message" => "Validation {$validation} field {$field} did not pass",
                            "field" => $field,
                            "validation" => $validation
                        ];
                    }
                    $this->validatedFields[] = $field;
                }
            }
        }
    }
}