<?php

namespace App\Controller\Admin;

use App\Entity\Booking;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BookingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Booking::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Réservations')
            ->setEntityLabelInSingular('Réservation');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom'),
            TextField::new('email', 'Adresse e-mail'),
            DateField::new('date', 'Date de réservation')->setFormat('dd-MM-yyy'),
            TextField::new('arrivalTime', 'Heure d\'arrivée'),
            NumberField::new('customersNb', 'Nombre de convives'),
            TextField::new('allergy', 'Mention d\'allergies')
        ];
    }
}
