<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu')]
    public function index(MenuRepository $menuRepository): Response
    {
        $menu = $menuRepository ->findBy([], ['id' => 'asc']);

        return $this->render('home/menu/index.html.twig', [
            'menu' => $menu,
        ]);
    }
}
