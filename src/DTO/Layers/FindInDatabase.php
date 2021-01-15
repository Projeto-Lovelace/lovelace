<?php


namespace App\DTO\Layers;


use App\Document\User;
use App\DTO\Main;

class FindInDatabase implements LayerInterface
{
    /**
     * @var string
     */
    private $documentName;
    /**
     * @var string
     */
    private $field;
    /**
     * @var string
     */
    private $value;
    /**
     * @var string
     */
    private $findType;

    /**
     * FindInDatabase constructor.
     * @param string $documentName
     * @param string $field
     * @param string $value
     * @param string $findType
     */
    public function __construct(string $documentName, string $findType = "", string $field = "", string $value = "")
    {
        $this->documentName = $documentName;
        $this->field = $field;
        $this->value = $value;
        $this->findType = $findType;
    }

    public function exec(Main $main)
    {
        $documentName = "App\\Document\\{$this->documentName}";
        $repository = $main->getDocumentManager()->getRepository($documentName);
        if($this->findType == ""){
            $findDocument = $repository->findAll();
        } else {
            $findDocument = $repository->{$this->findType}([$this->field => $this->value]);
        }

        $main->addResults(["findDocument" => $findDocument]);
    }
}