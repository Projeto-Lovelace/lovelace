<?php


namespace App\Controller;

use App\Document\Volunteer;
use App\DTO\Layers\RegisterVolunteer;
use App\DTO\Layers\RulesValidator;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use MongoDB\BSON\ObjectId;
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

    /**
     * @Route("/voluntario/contacted", name="volunteer_contacted", methods={"POST"})
     * @param Request $request
     */
    public function volunteerContacted(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $volunteerRepository = $this->documentManager->getRepository(Volunteer::class);
        $id = $data["contacted"]["volunteer"];
        /** @var Volunteer $volunteer */
        $volunteer = $volunteerRepository->find($id);
        $volunteer->setContacted($data["contacted"]["checked"]);

        $this->documentManager->persist($volunteer);
        $this->documentManager->flush();

        return new Response("ok", Response::HTTP_OK);
    }

    /**
     * @Route("/voluntario/datetime", name="volunteer_datetime", methods={"POST"})
     * @param Request $request
     */
    public function volunteerDateTime(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $volunteerRepository = $this->documentManager->getRepository(Volunteer::class);
        $id = $data["date"]["volunteer"];
        /** @var Volunteer $volunteer */
        $volunteer = $volunteerRepository->find($id);
        $volunteer->setTalkDateTime($data["date"]["datetime"]);

        $this->documentManager->persist($volunteer);
        $this->documentManager->flush();

        return new Response("ok", Response::HTTP_OK);
    }

    /**
     * @Route("/voluntario/whowilltalk", name="volunteer_whowilltalk", methods={"POST"})
     * @param Request $request
     */
    public function volunteerWhoWillTalk(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $volunteerRepository = $this->documentManager->getRepository(Volunteer::class);
        $id = $data["whoWillTalk"]["volunteer"];
        /** @var Volunteer $volunteer */
        $volunteer = $volunteerRepository->find($id);
        $volunteer->setWhoWillTalk($data["whoWillTalk"]["name"]);

        $this->documentManager->persist($volunteer);
        $this->documentManager->flush();

        return new Response("ok", Response::HTTP_OK);
    }
}