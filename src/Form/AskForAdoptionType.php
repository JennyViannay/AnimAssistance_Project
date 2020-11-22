<?php

namespace App\Form;

use App\Entity\AskForAdoption;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AskForAdoptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('address')
            ->add('zipcode')
            ->add('city')
            ->add('email')
            ->add('phone')
            ->add('phoneBis')
            ->add('facebookProfile')
            ->add('gardenAera')
            ->add('isClotured')
            ->add('clotureDetails')
            ->add('age')
            ->add('ageChildren')
            ->add('job')
            ->add('partnerJob')
            ->add('allergyDetails')
            ->add('dogDetails')
            ->add('catDetails')
            ->add('sterilizedDetail')
            ->add('veterinary')
            ->add('lonelyHoursDay')
            ->add('lonelyHoursMorning')
            ->add('lonelyHoursAfternoon')
            ->add('lonelyHoursEvening')
            ->add('daysByWeek')
            ->add('dogHousing')
            ->add('nightHousingDog')
            ->add('whoIsCarring')
            ->add('dogWalkingPrevisional')
            ->add('motivation')
            ->add('note')
            ->add('knowingAmi')
            ->add('housingType')
            ->add('haveGarden')
            ->add('isActive')
            ->add('haveChildren')
            ->add('haveAllergy')
            ->add('everyoneIsOk')
            ->add('haveDog')
            ->add('haveCat')
            ->add('haveOtherAnimal')
            ->add('animalSterilized')
            ->add('canBeIsolated')
            ->add('lunchTime')
            ->add('someoneCanHelp')
            ->add('dogCanAccesGarden')
            ->add('gender')
            ->add('aggreedTerm')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AskForAdoption::class,
        ]);
    }
}
