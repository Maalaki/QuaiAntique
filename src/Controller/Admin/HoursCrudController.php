<?php

namespace App\Controller\Admin;

use App\Entity\Hours;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Hours::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Horaires')
            ->setEntityLabelInSingular('Horaire');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('day', 'Jour'),
            TextField::new('time', 'Horaire du midi'),
            TextField::new('afternoon', 'Horaire du soir')
        ];
    }
}
