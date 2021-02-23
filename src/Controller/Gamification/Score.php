<?php

namespace App\Controller\Gamification;

use App\DTO\Layers\Gamification\AddScoreToUser;
use App\DTO\Layers\Gamification\GetTotalScore;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Score
 * @Route("/score")
 * @package App\Controller\Gamification
 */
class Score extends AbstractController
{
    /**
     * @var DocumentManager
     */
    private $manager;
    /**
     * @var MainBuilder
     */
    private $mainBuilder;

    /**
     * Score constructor.
     * @param DocumentManager $manager
     * @param MainBuilder $mainBuilder
     */
    public function __construct(DocumentManager $manager, MainBuilder $mainBuilder)
    {
        $this->manager = $manager;
        $this->mainBuilder = $mainBuilder;
    }

    /**
     * @Route("/add", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function addScore(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);

            $main = $this->mainBuilder->build($this->manager);

            $main->addLayer(new AddScoreToUser($data));

            $main->run();

            return new JsonResponse($main->getResults()[0], Response::HTTP_OK);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * @Route("/total/{userId}")
     * @param string $userId
     * @return JsonResponse
     * @throws \Exception
     */
    public function getTotalScore(string $userId): JsonResponse
    {
        try {
            $main = $this->mainBuilder->build($this->manager);

            $main->addLayer(new GetTotalScore($userId));

            $main->run();

            return new JsonResponse($main->getResults()[0], Response::HTTP_OK);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}