<?php

namespace App\Controller\Admin;

use App\Entity\Booking;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
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
            TextField::new('name'),
            TextField::new('email'),
            DateField::new('date')->setFormat('dd-MM-yyy'),
            ChoiceField::new('arrivalTime')->setChoices([
                '12:00' => '12:00',
                '12:15' => '12:15',
                '12:30' => '12:30',
                '12:45' => '12:45',
                '13:00' => '13:00',
                '13:15' => '13:15',
                '13:30' => '13:30',
                '19:00' => '19:00',
                '19:15' => '19:15',
                '19:30' => '19:30',
                '19:45' => '19:45',
                '20:00' => '20:00',
                '20:15' => '20:15',
                '20:30' => '20:30',
                '20:45' => '20:45',
                '21:00' => '21:00',
                '21:15' => '21:15',
                '21:30' => '21:30'

            ]),
            NumberField::new('customersNb'),
            TextField::new('allergy')
        ];
    }
}
