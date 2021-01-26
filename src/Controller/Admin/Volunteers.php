<?php

namespace App\Controller\Admin;


use App\Document\Volunteer;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Volunteers
 * @package App\Controller\Admin
 * @Route("/admin")
 */
class Volunteers extends AbstractController
{
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * Volunteers constructor.
     * @param DocumentManager $documentManager
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    /**
     * @Route("/volunteers", name="show_volunteers")
     */
    public function showVolunteers()
    {
        $volunteersRepository = $this->documentManager->getRepository(Volunteer::class);
        $volunteers = $volunteersRepository->findAll();
        return $this->render("admin/volunteers.html.twig", ["volunteers" => $volunteers]);
    }
}