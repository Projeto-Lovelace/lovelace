<?php
namespace App\DTO;

use LayerInterface;

class Main
{
    private $layers;

    public function getLayers()
    {
        return $this->layers;
    }

    public function addLayer(LayerInterface $layer): Main
    {
        $this->layers[] = $layer;
        return $this;
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