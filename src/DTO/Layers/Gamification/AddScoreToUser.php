<?php
namespace App\DTO\Layers\Gamification;

use App\Document\User;
use App\Document\UserHasScore;
use App\DTO\Layers\LayerInterface;
use App\DTO\Main;

class AddScoreToUser implements LayerInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * AddScoreToUser constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function exec(Main $main)
    {
        $userRepository = $main->getDocumentManager()->getRepository(User::class);
        $user = $userRepository->find($this->data["student"]);

        if (!$user) {
            return;
        }

        $datetime = (new \DateTime($this->data['datetime']))->getTimestamp();
        $description = isset($this->data['description']) ? $this->data['description'] : '';

        $score = new UserHasScore();
        $score->setUser($user->getId())
            ->setScore($this->data['score'])
            ->setDate($datetime)
            ->setDescription($description);

        $main->getDocumentManager()->persist($score);
        $main->getDocumentManager()->flush();

        $main->setUser($user);

        $main->addResults(['score' => json_decode(json_encode($score), true)]);
    }
}