<?php


namespace App\Controller;

use App\DTO\Layers\RegisterVolunteer;
use App\DTO\Layers\RulesValidator;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Subscription extends AbstractController
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
     * Subscription constructor.
     * @param MainBuilder $mainBuilder
     * @param DocumentManager $documentManager
     */
    public function __construct(MainBuilder $mainBuilder, DocumentManager $documentManager)
    {
        $this->mainBuilder = $mainBuilder;
        $this->documentManager = $documentManager;
    }

    /**
     * @Route("/voluntario", name="register_volunteer")
     * @param Request $request
     */
    public function registerVolunteer(Request $request)
    {
        try {
            if ($request->getMethod() == "POST") {

                $registerData = json_decode($request->getContent(), true);

                $main = $this->mainBuilder->build($this->documentManager);
                $main->addLayer(new RulesValidator($registerData));
                $main->addLayer(new RegisterVolunteer());

                $main->run();

                return new JsonResponse("ok", Response::HTTP_OK);
            }
            return $this->render("register/registerVolunteer.html.twig");
        } catch (\Exception $exception) {
            return new JsonResponse(
                [
                    "message" => $exception->getMessage(),
                    "more" => $exception->getTrace(),
                    "file" => $exception->getFile(),
                    "line" => $exception->getLine()
                ], $exception->getCode() ?: 500
            );
        }
    }

}