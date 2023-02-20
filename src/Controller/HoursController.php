<?php

namespace App\Controller;

use App\Repository\HoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HoursController extends AbstractController
{
    #[Route('/hours', name: 'hours')]
    public function index(HoursRepository $hoursRepository): Response
    {
        $hours = $hoursRepository ->findBy([], ['id' => 'asc']);

        return $this->render('home/hours/index.html.twig', [
            'hours' => $hours,
        ]);
    }
}
