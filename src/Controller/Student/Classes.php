<?php

namespace App\Controller\Student;

use DateTime;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Document\Classes as ClassesDocument;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class Classes
 * @package App\Controller\Student
 * @Route("/student")
 */
class Classes
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
     * @Route("/classes", name="get_classes")
     * @throws \HttpException
     */
    public function getClasses(): JsonResponse
    {
        try {
            $repository = $this->manager->getRepository(ClassesDocument::class);
            $dates = $repository->findAll();
            return new JsonResponse($dates);
        } catch (\Exception $exception) {
            throw new \HttpException($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @Route("/class", name="get_class")
     * @param Request $request
     * @throws \Exception
     */
    public function getClass(Request $request): JsonResponse
    {
        try {
            $date = new DateTime($request->query->get("datetime"));
            $dateFormatted = $date->format('Y-m-d H:i');
            $repository = $this->manager->getRepository(ClassesDocument::class);
            $class = $repository->findOneBy(["startDate" => $dateFormatted]);
            if ($class) {
                return new JsonResponse(['title' => $class->getTitle(), 'videoUrl' => $class->getVideoUrl()]);
            }
            return new JsonResponse();
        } catch (\Exception $exception) {
            throw new \HttpException($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}