<?php

namespace App\Controller;

use App\Entity\Pictures;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(UploaderHelper $uploaderHelper, PersistenceManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $pictures = $entityManager->getRepository(Pictures::class)->findAll();

        return $this->render('home/index.html.twig', [
            'picture1' => $pictures[0],
            'picture2' => $pictures[1],
            'picture3' => $pictures[2],
            'uploader_helper' => $uploaderHelper,
        ]);
    }
}