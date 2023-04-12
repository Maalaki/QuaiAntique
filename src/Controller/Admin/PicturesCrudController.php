<?php

namespace App\Controller\Admin;

use App\Entity\Pictures;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PicturesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pictures::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Images')
            ->setEntityLabelInSingular('Image');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Identifiant'),
            TextField::new('title', 'Titre'),
            TextField::new('previewFile')->setFormType(VichImageType::class)->onlyOnForms(),
            ImageField::new('preview', 'Aperçu')
                ->setBasePath('/img')
                ->setUploadDir('/public/img')
                ->onlyOnIndex(),
            TextField::new('cardTitle', 'Titre affiché'),
            TextareaField::new('description', 'Description')
        ];
    }
}
