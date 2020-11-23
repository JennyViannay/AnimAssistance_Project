<?php

namespace App\Controller\Admin;

use App\Entity\Rescue;
use App\Form\ImageType;
use Doctrine\DBAL\Types\BlobType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RescueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rescue::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('name', 'Prénom'),
            DateField::new('birthday', 'Date de naissance'),
            AssociationField::new('gender', 'Sexe'),
            TextEditorField::new('description'),
            BooleanField::new('is_adopted', 'Est adopté.e'),
            CollectionField::new('images')
            ->setEntryType(ImageType::class)
            ->setFormTypeOption('by_reference', false)
            ->onlyOnForms()
        ];
        
        if ($pageName == Crud::PAGE_DETAIL) {
            $images = CollectionField::new('images')
            ->setTemplatePath('admin/image.html.twig');
            array_push($fields, $images);
        } 

        if ($pageName == Crud::PAGE_INDEX) {
            $images = CollectionField::new('images');
            $createadAt = DateField::new('createdAt');
            array_push($fields, $images);
            array_push($fields, $createadAt);
        }

        return $fields;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX,'detail');
    }
}
