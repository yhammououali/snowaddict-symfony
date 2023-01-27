<?php

namespace App\FormHandler;

use App\Entity\Figure;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

final class FigureFormHandler
{
    public function __construct(
        public EntityManagerInterface $entityManager
    ) {}

    public function handleForm(Figure $figure): void
    {
        $user = new User();
        $user->setFirstName('Yassin');

        $this->entityManager->persist($user);

        $figure->setUser($user);

        $this->entityManager->persist($figure);
        $this->entityManager->flush();
    }
}
