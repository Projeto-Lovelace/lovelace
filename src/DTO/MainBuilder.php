<?php


namespace App\DTO;


use Doctrine\ODM\MongoDB\DocumentManager;

class MainBuilder
{
    public function build(DocumentManager $documentManager)
    {
        return new Main($documentManager);
    }
}