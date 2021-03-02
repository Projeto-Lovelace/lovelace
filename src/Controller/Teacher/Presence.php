<?php

namespace App\Controller\Teacher;

use App\Document\Classes as Classes;
use App\Document\StudentWatchedVideoClass;
use App\Document\User;
use App\Document\UserHasScore;
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
     * @Route("/video", name="check_video_presences")
     * @param string $classId
     * @return Response
     */
    public function videoWatched(): Response
    {
        return $this->render('teacher/videoPresences.html.twig');
    }

    /**
     * @Route("/video/{classId}")
     * @param string $classId
     * @return Response
     */
    public function getVideoClassPresence(string $classId)
    {
        $videoRepository = $this->manager->getRepository(StudentWatchedVideoClass::class);
        $classRepository = $this->manager->getRepository(Classes::class);

        $videoClasses = $videoRepository->findBy(['class' => $classId]);

        $result = [];

        $classes = array_filter($videoClasses, function ($videoClass) use ($classRepository){
            $student = $this->manager->createQueryBuilder(User::class)
                ->field('roles')->all(['ROLE_STUDENT'])
                ->field('_id')->equals($videoClass->getStudent())
                ->getQuery()
                ->getSingleResult();

            if($student) {
                $class = $classRepository->find($videoClass->getClass());

                $videoClass->setClass($class);
                $videoClass->setStudent($student);

                return $videoClass;
            }
        });

        foreach ($classes as $class){
            $result[] = $class;
        }

        return new JsonResponse($result, Response::HTTP_OK);
    }
}