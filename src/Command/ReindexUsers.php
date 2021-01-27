<?php


namespace App\Command;


use App\Document\Address;
use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReindexUsers extends Command
{
    protected static $defaultName = 'app:reindex-users';
    /**
     * @var DocumentManager
     */
    private $documentManager;

    /**
     * ReindexUsers constructor.
     * @param string|null $name
     * @param DocumentManager $documentManager
     */
    public function __construct(string $name = null, DocumentManager $documentManager)
    {
        parent::__construct($name);
        $this->documentManager = $documentManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $userRepository = $this->documentManager->getRepository(User::class);
        $users = $userRepository->findAll();

        /** @var User $user */
        foreach ($users as $user){
            $qb = $this->documentManager->createQueryBuilder(User::class);
            $qb->remove()
                ->getQuery()
                ->execute();
        }
        $output->write("Aguarde ...");

        sleep(5);

        foreach ($users as $user){
            $newUser = new User();
            $newUser->setName($user->getName())
                ->setEmail($user->getEmail())
                ->setPhotoPath($user->getPhotoPath())
                ->setPassword($user->getPassword())
                ->setEmailValidated($user->isEmailValidated())
                ->setId($user->getId())
                ->setRoles("ROLE_USER");

            $this->documentManager->persist($newUser);
            $this->documentManager->flush();
        }

        $output->write("Sucesso!");
    }
}