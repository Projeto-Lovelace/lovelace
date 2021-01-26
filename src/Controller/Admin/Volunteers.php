<?php

namespace App\Controller\Admin;


use App\Document\Volunteer;
use App\DTO\Layers\FormatVolunteersPhone;
use App\DTO\MainBuilder;
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
     * @var MainBuilder
     */
    private $mainBuilder;

    /**
     * Volunteers constructor.
     * @param DocumentManager $documentManager
     * @param MainBuilder $mainBuilder
     */
    public function __construct(DocumentManager $documentManager, MainBuilder $mainBuilder)
    {
        $this->documentManager = $documentManager;
        $this->mainBuilder = $mainBuilder;
    }

    /**
     * @Route("/volunteers", name="show_volunteers")
     */
    public function showVolunteers()
    {
        $volunteersRepository = $this->documentManager->getRepository(Volunteer::class);
        $volunteers = $volunteersRepository->findAll();
        $count = sizeof($volunteers);

        $main = $this->mainBuilder->build($this->documentManager);
        $main->addLayer(new FormatVolunteersPhone($volunteers));

        $main->run();

        $message = "Olá!\nVocê se inscreveu na vaga para voluntários no projeto Lovelace\nPodemos marcar uma conversa ?\nQual a sua disponibilidade ?";
        $whatsappMessage = str_replace(' ', '%20', $message);
        $whatsappMessage = str_replace("\n", '%0a', $whatsappMessage);

        return $this->render("admin/volunteers.html.twig", ["volunteers" => $main->getResults()[0]["volunteers"],
            "count" => $count,
            "whatsappMessage" => $whatsappMessage]
        );
    }
}