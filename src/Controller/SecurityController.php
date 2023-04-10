<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Entity\User;
use App\Form\BookingType;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends AbstractController
{
    #[Route('/connexion', name: 'security.login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        return $this->render('home/security/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }
    #[Route('/deconnexion', 'security.logout')]
    public function logout()
    {
    }
    #[Route('/inscription', 'security.registration', methods: ['GET', 'POST'])]
    public function registration(Request $request, EntityManagerInterface $manager): Response
    {
        $user = new User();
        $user->setRoles(['ROLE_USER']);

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $this->addFlash(
                'success',
                'Votre compte a bien été créé.'
            );

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('security.login');
        }

        return $this->render('home/security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
    #[Route('/bookingform', 'security.booking', methods: ['GET', 'POST'])]
    public function booking(Request $request, EntityManagerInterface $manager): Response
    {
        $booking = new Booking();

        $user = $this->getUser();
        $allergy = $user?->getAllergy();

        $form = $this->createForm(BookingType::class, $booking, [
            'allergy' => $allergy,
        ]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $booking = $form->getData();

            $manager->persist($booking);
            $manager->flush();

            return $this->redirectToRoute('booking');

        }

        return $this->render('home/security/bookingform.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
