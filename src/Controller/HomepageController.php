<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage/{name}', name: 'app_homepage', methods: ['GET'])]
    public function homepage(string $name): Response
    {
        return $this->render('homepage/index.html.twig', [
            'firstName' => $name
        ]);
    }
}
