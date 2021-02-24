<?php

namespace App\Controller\Gamification;

use App\Document\User;
use App\Document\UserHasScore;
use App\DTO\Layers\Gamification\AddScoreToUser;
use App\DTO\Layers\Gamification\GetGameResults;
use App\DTO\MainBuilder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
     * @Security("is_granted('ROLE_VOLUNTEER')")
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
     * @Security("is_granted('ROLE_USER')")
     */
    public function getTotalScore(string $userId): JsonResponse
    {
        try {
            $main = $this->mainBuilder->build($this->manager);

            $main->addLayer(new GetGameResults($userId));

            $main->run();

            return new JsonResponse($main->getResults()[0], Response::HTTP_OK);
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * @Route("/ranking", name="ranking")
     * @Security("is_granted('ROLE_USER')")
     */
    public function getRanking()
    {
        $users = $this->manager->createQueryBuilder(User::class)
            ->field('roles')->all(['ROLE_STUDENT'])
            ->getQuery()
            ->toArray();

        $scoreRepository = $this->manager->getRepository(UserHasScore::class);

        $userHasScore = [];

        foreach ($users as $user) {
            $userScore = $scoreRepository->findBy(['user' => $user->getId()]);
            if(!$userScore) {
                continue;
            }
            $userHasScore[$user->getId()]['user'] = $user;

            $scores = array_map(function ($score) {
                return $score->getScore();
            }, $userScore);

            $userHasScore[$user->getId()]['score'] = array_sum($scores);
            $userHasScore[$user->getId()]['trophy'] = (int) ($userHasScore[$user->getId()]['score']/1000);
        }

        usort($userHasScore, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });
        return $this->render('gamification/ranking.html.twig', ['usersScores' => $userHasScore]);
    }
}