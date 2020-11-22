<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use App\Form\ImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;

class ImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Image::class;
    }

    // public function configureFields(string $pageName): iterable
    // {
    //     return [
    //         ImageField::new(
    //             'imageFile', 
    //             'Télécharger une image'
    //         )->setFormType(VichImageType::class)->onlyOnForms(),
            
    //         ImageField::new('image', 'Images')->setBasePath('uploads/images')->hideOnForm(),
    //         AssociationField::new('rescue', 'Prénom')->hideOnForm(),
    //     ];
    // }

    // public function configureActions(Actions $actions): Actions
    // {
    //     return $actions->add(Crud::PAGE_INDEX,'detail');
    // }
}
