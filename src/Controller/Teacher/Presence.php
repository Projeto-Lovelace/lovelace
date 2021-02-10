<?php

namespace App\Controller\Teacher;

use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Presence
 * @package App\Controller\Teacher
 * @Route("/teacher/presence")
 */
class Presence extends AbstractController
{
    /**
     * @var DocumentManager
     */
    private $manager;

    /**
     * Presence constructor.
     * @param DocumentManager $manager
     */
    public function __construct(DocumentManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/students")
     * @return Response
     */
    public function getStudents(): Response
    {
        $users = $this->manager->getRepository(User::class)->findAll();
        $students = array_filter($users, function ($data) {
            if (in_array('ROLE_STUDENT', $data->getRoles())) {
                return $data;
            }
            return '';
        });
        return $this->render('teacher/presence.html.twig', ['students' => $students]);
    }
}