<?php
namespace App\Controller\Teacher;

use App\Document\Classes as ClassesDocument;
use DateTime;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Classes
 * @package App\Controller\Teacher
 * @Route("/teacher")
 */
class Classes extends AbstractController
{
    /**
     * @var DocumentManager
     */
    private $manager;

    /**
     * Classes constructor.
     * @param DocumentManager $manager
     */
    public function __construct(DocumentManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/edit", name="teacher_edit_classes")
     */
    public function editClasses()
    {
        return $this->render('teacher/editClass.html.twig');
    }

    /**
     * @Route("/classes", name="get_classes")
     */
    public function getClasses()
    {
        $repository = $this->manager->getRepository(ClassesDocument::class);
        $dates = $repository->findAll();
        return new JsonResponse($dates);
    }

    /**
     * @Route("/class", name="get_class")
     * @param Request $request
     */
    public function getClass(Request $request)
    {
        try {
            $date = new DateTime($request->query->get("datetime"));
            $dateFormatted = $date->format('Y-m-d H:i');
            $repository = $this->manager->getRepository(ClassesDocument::class);
            $class = $repository->findOneBy(["startDate" => $dateFormatted]);
            return new JsonResponse(['title' => $class->getTitle(), 'videoUrl' => $class->getVideoUrl()]);
        } catch (\Exception $exception) {
            return new JsonResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}