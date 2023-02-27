<?php

namespace App\Controller\Admin;

use App\Entity\Hours;
use App\Entity\Booking;
use App\Entity\Formula;
use App\Entity\Menu;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {
        return $this->render('home/admin/dashboard.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Le Quai Antique');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa-solid fa-user', User::class);
        yield MenuItem::linkToCrud('Carte', 'fa-solid fa-bowl-food', Menu::class);
        yield MenuItem::linkToCrud('Menus', 'fa-solid fa-heart',Formula::class);
        yield MenuItem::linkToCrud('Réservations', 'fa-solid fa-people-group', Booking::class);
        yield MenuItem::linkToCrud('Horaires', 'fa-solid fa-clock', Hours::class);
        yield MenuItem::linkToCrud('Galerie', 'fa-solid fa-image', User::class);

    }
}
