<?php
namespace App\Controller;

use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\DTO\Layers\RulesValidator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Student extends AbstractController
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
     * Student constructor.
     * @param DocumentManager $documentManager
     * @param MainBuilder $mainBuilder
     */
    public function __construct(DocumentManager $documentManager, MainBuilder $mainBuilder)
    {
        $this->documentManager = $documentManager;
        $this->mainBuilder = $mainBuilder;
    }

    /**
     * @Route("/register", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        try {
            $registerData = json_decode($request->getContent(), true);

            if(!isset($registerData["register"])){
                throw new \Exception("Register doesn't exist");
            }

            $main = $this->mainBuilder->build($this->documentManager);

            $main->addLayer(new RulesValidator($registerData));

            $result = $main->run();

            return new JsonResponse($result, Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse(
                [
                    "message" => $exception->getMessage(),
                    "file" => $exception->getFile(),
                    "line" => $exception->getLine()
                ]
            );
        }
    }
}