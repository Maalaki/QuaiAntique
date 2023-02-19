<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingController extends AbstractController
{
    #[Route('/booking', name: 'booking')]
    public function index(): Response
    {
        return $this->render('home/booking/index.html.twig', [
            'controller_name' => 'BookingController',
        ]);
    }
}
