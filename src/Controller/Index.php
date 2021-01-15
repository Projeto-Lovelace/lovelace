<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function getIndex(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('index/index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/portal", name="dashboardDefault")
     */
    public function getDefaultDashboard()
    {
        return $this->render('dashboard/main.html.twig');
    }
}