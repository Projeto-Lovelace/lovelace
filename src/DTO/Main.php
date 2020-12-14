<?php
namespace App\DTO;

use App\DTO\Layers\LayerInterface;
use Doctrine\ODM\MongoDB\DocumentManager;


class Main
{
    private $layers;
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * Main constructor.
     * @param DocumentManager $documentManager
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    public function getLayers()
    {
        return $this->layers;
    }

    /**
     * @param LayerInterface $layer
     * @return $this
     */
    public function addLayer(LayerInterface $layer)
    {
        $this->layers[] = $layer;
        return $this;
    }

    /**
     * @return DocumentManager
     */
    public function getDocumentManager()
    {
        return $this->documentManager;
    }

    public function run()
    {
        foreach ($this->layers as $layer){
            $response = $layer->exec($this);
            if($response){
                return $response;
            }
        }
    }
}