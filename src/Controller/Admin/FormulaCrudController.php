<?php

namespace App\Controller\Admin;

use App\Entity\Formula;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FormulaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Formula::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Menus')
            ->setEntityLabelInSingular('Menu');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('formulaType', 'Type de menu'),
            TextEditorField::new('description', 'Description'),
            NumberField::new('price', 'Prix (en €)')
        ];
    }
}
