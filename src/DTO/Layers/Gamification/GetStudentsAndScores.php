<?php


namespace App\DTO\Layers\Gamification;


use App\Document\User;
use App\Document\UserHasScore;
use App\DTO\Layers\LayerInterface;
use App\DTO\Main;

class GetStudentsAndScores implements LayerInterface
{

    public function exec(Main $main)
    {
        $users = $main->getDocumentManager()->createQueryBuilder(User::class)
            ->field('roles')->all(['ROLE_STUDENT'])
            ->getQuery()
            ->toArray();

        $scoreRepository = $main->getDocumentManager()->getRepository(UserHasScore::class);

        $userHasScore = [];

        foreach ($users as $user) {
            $userScore = $scoreRepository->findBy(['user' => $user->getId()]);

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

        return $userHasScore;
    }
}