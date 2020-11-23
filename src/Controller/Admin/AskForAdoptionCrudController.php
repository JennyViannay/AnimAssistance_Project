<?php

namespace App\Controller\Admin;

use App\Entity\AskForAdoption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class AskForAdoptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AskForAdoption::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(),
            TextField::new('lastname')->onlyOnDetail(),
            TextField::new('firstname'),
            TextField::new('address')->onlyOnDetail(),
            IntegerField::new('zipcode'),
            TextField::new('city'),
            TextField::new('email'),
            AssociationField::new('gender'),
            TextField::new('phone'),
            TextField::new('phoneBis')->onlyOnDetail(),
            NumberField::new('age')->onlyOnDetail(),
            TextField::new('ageChildren')->onlyOnDetail(),
            AssociationField::new('haveDog')->onlyOnDetail(),
            AssociationField::new('haveCat')->onlyOnDetail(),
            TextEditorField::new('dogDetails')->onlyOnDetail(),
            TextEditorField::new('catDetails')->onlyOnDetail(),
            TextEditorField::new('allergyDetails')->onlyOnDetail(),
            TextField::new('houseType')->onlyOnDetail(),
            AssociationField::new('haveGarden')->onlyOnDetail(),
            AssociationField::new('isActive')->onlyOnDetail(),
            AssociationField::new('haveChildren')->onlyOnDetail(),
            AssociationField::new('haveAllergy')->onlyOnDetail(),
            AssociationField::new('everyoneIsOk')->onlyOnDetail(),
            AssociationField::new('haveOtherAnimal')->onlyOnDetail(),
            AssociationField::new('animalSterilized')->onlyOnDetail(),
            AssociationField::new('canBeIsolated')->onlyOnDetail(),
            AssociationField::new('lunchTime')->onlyOnDetail(),
            AssociationField::new('someoneCanHelp')->onlyOnDetail(),
            TextField::new('dogCanAccessGarden')->onlyOnDetail(),
            TextField::new('addreedTerm')->onlyOnDetail(),
            TextField::new('facebookProfile'),
            NumberField::new('gardenArea')->onlyOnDetail(),
            TextEditorField::new('clotureDetails')->onlyOnDetail(),
            TextField::new('job')->onlyOnDetail(),
            TextEditorField::new('sterilizedDetail')->onlyOnDetail(),
            TextEditorField::new('veterinary')->onlyOnDetail(),
            NumberField::new('lonelyHoursDay')->onlyOnDetail(),
            NumberField::new('lonelyHoursMorning')->onlyOnDetail(),
            NumberField::new('lonelyHoursAfternoon')->onlyOnDetail(),
            NumberField::new('lonelyHoursEvening')->onlyOnDetail(),
            NumberField::new('daysByWeek')->onlyOnDetail(),
            TextField::new('dogHousing')->onlyOnDetail(),
            TextField::new('nightHousingDog')->onlyOnDetail(),
            TextField::new('whoIsCaring')->onlyOnDetail(),
            TextField::new('dogWalkingPrivisional')->onlyOnDetail(),
            TextEditorField::new('motivation')->onlyOnDetail(),
            TextEditorField::new('note')->onlyOnDetail(),
            TextEditorField::new('knowingAmi')->onlyOnDetail(),
            NumberField::new('housingAera')->onlyOnDetail(),
            AssociationField::new('gardenIsClotured')->onlyOnDetail(),
            NumberField::new('howManyDog')->onlyOnDetail(),
            TextEditorField::new('animalDetails')->onlyOnDetail(),
            DateField::new('createdAt'),
            TextField::new('partnerJob')->onlyOnDetail(),
            BooleanField::new('isAccepted')
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX,'detail')
        ->remove(Crud::PAGE_INDEX,'new');
    }
}
