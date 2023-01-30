<?php

namespace App\Controller;

use App\Entity\Figure;
use App\Form\FigureType;
use App\FormHandler\FigureFormHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FigureController extends AbstractController
{
    #[Route('/figure/create', name: 'app_figure_create', methods: ['GET', 'POST'])]
    public function create(Request $request, FigureFormHandler $figureFormHandler): Response
    {
        $figure = new Figure();

        $form = $this->createForm(FigureType::class, $figure);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $figureFormHandler->handleForm($figure);
        }

        return $this->render('figure/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/figure/{figureId}/view', name: 'app_figure_view', methods: ['GET'])]
    #[Entity('figure', options: ['id' => 'figureId'])]
    public function view(Request $request, Figure $figure)
    {
        dd($figure);
    }
}
