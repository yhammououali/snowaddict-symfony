<?php

namespace App\Controller;

use App\Repository\FigureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage/{name}', name: 'app_homepage', methods: ['GET'])]
    public function homepage(string $name, FigureRepository $figureRepository): Response
    {


        return $this->render('homepage/index.html.twig', [
            'firstName' => $name,
            'figures' => $figureRepository->findAll(),
        ]);
    }
}
