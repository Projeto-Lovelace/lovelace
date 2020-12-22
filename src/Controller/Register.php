<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Register
 * @package App\Controller
 * @Route("/register")
 */
class Register extends AbstractController
{
    /**
     * @Route("", name="register", methods={"GET"})
     */
    public function register()
    {
        return $this->render('register/register.html.twig');
    }

    /**
     * @Route("/finish", methods={"POST"}, name="registerFinish")
     * @param Request $request
     */
    public function registerFinish(Request $request)
    {
        return $this->redirectToRoute("index");
    }
}