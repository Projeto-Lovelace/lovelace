<?php

namespace App\Controller\Teacher;

use App\Document\Classes as ClassesDocument;
use DateTime;
use Doctrine\ODM\MongoDB\DocumentManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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
     * @Security("is_granted('ROLE_VOLUNTEER')")
     */
    public function editClasses()
    {
        return $this->render('teacher/editClass.html.twig');
    }

    /**
     * @Route("/save/class", name="teacher_save_class")
     * @Security("is_granted('ROLE_VOLUNTEER')")
     * @param Request $request
     */
    public function teacherSaveClass(Request $request)
    {
        $titlesMap = [
            'linguagem' => 'Linguagem de programação',
            'logica' => 'Logica de programação',
            'banco' => 'Banco de dados',
            'front' => 'Front end',
            'cultura' => 'Cultura agil',
            'soft' => 'Soft skills'
        ];

        $data = $request->request->all();

        $class = new ClassesDocument();
        if (isset($data["date"])) {
            $dateFormatted = (new DateTime($data["date"]))->format("Y-m-d H:i");
            $repository = $this->manager->getRepository(ClassesDocument::class);
            $class = $repository->findOneBy(["startDate" => $dateFormatted]);
            
            if (!$class) {
                $class = new ClassesDocument();
            }

            $class->setStartDate($dateFormatted);
            $class->setEndDate((new DateTime($data["date"]))->add(new \DateInterval("PT1H"))->format("Y-m-d H:i"));
        }
        if (isset($data['className'])) {
            $class->setTitle($titlesMap[$data['className']]);
        }
        if (isset($data['youtube'])) {
            $parts = parse_url($data['youtube']);
            $code = '';
            if (isset($parts['query'])) {
                parse_str($parts['query'], $query);
                $code = $query['v'];
            }
            else if(isset($parts['path'])){
                $path = explode('/', $parts['path']);
                $code = end($path);
            }
            $urlBase = "https://www.youtube-nocookie.com/embed/{$code}";
            $class->setVideoUrl($urlBase);
            $class->setVideoCode($code);
        }
        $this->manager->persist($class);
        $this->manager->flush();
        return $this->redirectToRoute('teacher_edit_classes');
    }

    /**
     * @Route("/class/delete")
     * @Security("is_granted('ROLE_VOLUNTEER')")
     * @param Request $request
     */
    public function deleteClass(Request $request)
    {
        try {
            $data = json_decode($request->getContent(), true);
            $dateFormatted = (new DateTime($data["datetime"]))->format("Y-m-d H:i");
            $repository = $this->manager->getRepository(ClassesDocument::class);
            $class = $repository->findOneBy(["startDate" => $dateFormatted]);

            $this->manager->remove($class);
            $this->manager->flush();

            return new JsonResponse("ok", Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}