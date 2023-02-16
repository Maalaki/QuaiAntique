<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/menu', name: 'menu')]
    public function menu(): Response
    {
        return $this->render('home/menu.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/formula', name: 'formula')]
    public function formula(): Response
    {
        return $this->render('home/formula.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
