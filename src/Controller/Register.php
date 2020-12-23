<?php
namespace App\Controller;

use App\DTO\Layers\RulesValidator;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Register
 * @package App\Controller
 * @Route("/register")
 */
class Register extends AbstractController
{
    /**
     * @var MainBuilder
     */
    private $mainBuilder;
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * Register constructor.
     * @param MainBuilder $mainBuilder
     * @param DocumentManager $documentManager
     */
    public function __construct(MainBuilder $mainBuilder, DocumentManager $documentManager)
    {
        $this->mainBuilder = $mainBuilder;
        $this->documentManager = $documentManager;
    }

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

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/validate", name="validateRegister", methods={"POST"})
     */
    public function validateRegister(Request $request)
    {
        try {
            $registerData = json_decode($request->getContent(), true);

            if(!isset($registerData["register"])){
                throw new \Exception("Register field doesn't exist");
            }

            $main = $this->mainBuilder->build($this->documentManager);

            $main->addLayer(new RulesValidator($registerData));

            $result = $main->run();

            if(array_key_exists("exception", $result)){
                throw new \Exception(json_encode($result["exception"]));
            }

            return new JsonResponse($result, Response::HTTP_OK);
        } catch (\Exception $exception) {
            return new JsonResponse(
                [
                    "message" => $exception->getMessage(),
                    "file" => $exception->getFile(),
                    "line" => $exception->getLine()
                ], Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}