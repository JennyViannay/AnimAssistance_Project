<?php

namespace App\Controller\Admin;

use App\Entity\AskForAdoption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
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
            NumberField::new('zipcode'),
            TextField::new('city'),
            TextField::new('email'),
            TextField::new('gender'),
            TextField::new('phone'),
            TextField::new('phoneBis')->onlyOnDetail(),
            NumberField::new('age')->onlyOnDetail(),
            TextField::new('ageChildren')->onlyOnDetail(),
            TextField::new('haveDog')->onlyOnDetail(),
            TextField::new('haveCat')->onlyOnDetail(),
            TextField::new('dogDetails')->onlyOnDetail(),
            TextField::new('catDetails')->onlyOnDetail(),
            TextField::new('allergyDetails')->onlyOnDetail(),
            TextField::new('houseType')->onlyOnDetail(),
            TextField::new('haveGarden')->onlyOnDetail(),
            TextField::new('isActive')->onlyOnDetail(),
            TextField::new('haveChildren')->onlyOnDetail(),
            TextField::new('haveAllergy')->onlyOnDetail(),
            TextField::new('everyoneIsOk')->onlyOnDetail(),
            TextField::new('haveOtherAnimal')->onlyOnDetail(),
            TextField::new('animalSterilized')->onlyOnDetail(),
            TextField::new('canBeIsolated')->onlyOnDetail(),
            TextField::new('lunchTime')->onlyOnDetail(),
            TextField::new('someoneCanHelp')->onlyOnDetail(),
            TextField::new('someoneCanHelpdogCanAccessGarden')->onlyOnDetail(),
            TextField::new('addreedTerm')->onlyOnDetail(),
            TextField::new('facebookProfile'),
            TextField::new('gardenArea')->onlyOnDetail(),
            TextField::new('clotureDetails')->onlyOnDetail(),
            TextField::new('job')->onlyOnDetail(),
            TextField::new('sterilizedDetail')->onlyOnDetail(),
            TextField::new('veterinary')->onlyOnDetail(),
            NumberField::new('lonelyHoursDay')->onlyOnDetail(),
            NumberField::new('lonelyHoursMorning')->onlyOnDetail(),
            NumberField::new('lonelyHoursAfternoon')->onlyOnDetail(),
            NumberField::new('lonelyHoursEvening')->onlyOnDetail(),
            NumberField::new('daysByWeek')->onlyOnDetail(),
            TextField::new('dogHousing')->onlyOnDetail(),
            TextField::new('nightHousingDog')->onlyOnDetail(),
            TextField::new('whoIsCaring')->onlyOnDetail(),
            TextField::new('whoIsCaringdolkWalkingPrivisional')->onlyOnDetail(),
            TextField::new('motivation')->onlyOnDetail(),
            TextField::new('note')->onlyOnDetail(),
            TextField::new('knowingAmi')->onlyOnDetail(),
            NumberField::new('housingAera')->onlyOnDetail(),
            TextField::new('gardenIsClotured')->onlyOnDetail(),
            TextField::new('howManyDog')->onlyOnDetail(),
            TextField::new('animalDetails')->onlyOnDetail(),
            TextField::new('createtAt'),
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
