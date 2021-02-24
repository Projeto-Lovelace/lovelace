<?php
namespace App\DTO\Layers\Gamification;

use App\Document\UserHasScore;
use App\DTO\Layers\LayerInterface;
use App\DTO\Main;

class GetGameResults implements LayerInterface
{
    /**
     * @var string
     */
    private $userId;

    /**
     * GetTotalScore constructor.
     * @param string $userId
     */
    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    public function exec(Main $main)
    {
        $scoreRepository = $main->getDocumentManager()->getRepository(UserHasScore::class);
        $score = $scoreRepository->findBy(['user' => $this->userId]);

        $scores = array_map(function ($score) {
            return $score->getScore();
        }, $score);

        $score = array_sum($scores);
        $trophy = (int)($score/1000);
        $result = [
            'user' => $this->userId,
            'score' => $score,
            'trophy' => $trophy
        ];

        return $result;
    }
}