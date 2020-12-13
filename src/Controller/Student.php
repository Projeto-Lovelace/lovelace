<?php
namespace App\Controller;

use App\DTO\MainBuilder;
use RegisterClass;
use RegisterUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Student extends AbstractController
{
    /**
     * @Route("/register", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function register(Request $request): Response
    {
        try {
            $registerData = json_decode($request->getContent(), true);

            if(!isset($registerData["register"])){
                throw new \Exception("Register doesn't exist");
            }

            $main = (new MainBuilder())->build();

            $main->addLayer(new RegisterUser($registerData));

            $result = $main->run();

            return new JsonResponse($result);
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