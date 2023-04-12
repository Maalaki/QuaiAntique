<?php

namespace App\Controller\Admin;

use App\Entity\Menu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MenuCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Menu::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Plats à la carte')
            ->setEntityLabelInSingular('Plat');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('category', 'Catégorie'),
            TextField::new('title', 'Titre'),
            TextEditorField::new('description', 'Description'),
            NumberField::new('price', 'Prix (en €)')
        ];
    }
}
