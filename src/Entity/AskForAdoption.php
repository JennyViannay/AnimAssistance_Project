<?php

namespace App\Entity;

use App\Repository\AskForAdoptionRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

/**
 * @ORM\Entity(repositoryClass=AskForAdoptionRepository::class)
 * @ORM\Table(indexes={@Index(name="created_at_index", columns={"created_at"})})
 * @ORM\HasLifecycleCallbacks()
 */
class AskForAdoption
{
    use Timestamp;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phoneBis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebookProfile;

    /**
     * @ORM\ManyToOne(targetEntity=Housing::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $housingType;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $haveGarden;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $gardenAera;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $clotureDetails;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\ManyToOne(targetEntity=IsActive::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $isActive;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $haveChildren;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ageChildren;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $partnerJob;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $haveAllergy;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $allergyDetails;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $everyoneIsOk;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $haveDog;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $dogDetails;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $haveCat;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $catDetails;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $haveOtherAnimal;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     */
    private $animalSterilized;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sterilizedDetail;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     */
    private $canBeIsolated;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $veterinary;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lonelyHoursDay;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lonelyHoursMorning;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lonelyHoursAfternoon;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lonelyHoursEvening;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $daysByWeek;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     */
    private $lunchTime;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     */
    private $someoneCanHelp;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dogHousing;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     */
    private $dogCanAccesGarden;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nightHousingDog;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $whoIsCarring;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $dogWalkingPrevisional;

    /**
     * @ORM\ManyToOne(targetEntity=Gender::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="text")
     */
    private $motivation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $knowingAmi;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $aggreedTerm;

    /**
     * @ORM\Column(type="integer")
     */
    private $housingAera;

    /**
     * @ORM\ManyToOne(targetEntity=YesNo::class)
     */
    private $gardenIsClotured;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $howManyDog;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $animalDetails;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isAccepted;

    public function __construct()
    {
        $this->isAccepted = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipcode(): ?int
    {
        return $this->zipcode;
    }

    public function setZipcode(int $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPhoneBis(): ?string
    {
        return $this->phoneBis;
    }

    public function setPhoneBis(?string $phoneBis): self
    {
        $this->phoneBis = $phoneBis;

        return $this;
    }

    public function getFacebookProfile(): ?string
    {
        return $this->facebookProfile;
    }

    public function setFacebookProfile(?string $facebookProfile): self
    {
        $this->facebookProfile = $facebookProfile;

        return $this;
    }

    public function getHousingType(): ?Housing
    {
        return $this->housingType;
    }

    public function setHousingType(?Housing $housingType): self
    {
        $this->housingType = $housingType;

        return $this;
    }

    public function getHaveGarden(): ?YesNo
    {
        return $this->haveGarden;
    }

    public function setHaveGarden(?YesNo $haveGarden): self
    {
        $this->haveGarden = $haveGarden;

        return $this;
    }

    public function getGardenAera(): ?int
    {
        return $this->gardenAera;
    }

    public function setGardenAera(?int $gardenAera): self
    {
        $this->gardenAera = $gardenAera;

        return $this;
    }

    public function getClotureDetails(): ?string
    {
        return $this->clotureDetails;
    }

    public function setClotureDetails(?string $clotureDetails): self
    {
        $this->clotureDetails = $clotureDetails;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getIsActive(): ?IsActive
    {
        return $this->isActive;
    }

    public function setIsActive(?IsActive $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getHaveChildren(): ?YesNo
    {
        return $this->haveChildren;
    }

    public function setHaveChildren(?YesNo $haveChildren): self
    {
        $this->haveChildren = $haveChildren;

        return $this;
    }

    public function getAgeChildren(): ?string
    {
        return $this->ageChildren;
    }

    public function setAgeChildren(?string $ageChildren): self
    {
        $this->ageChildren = $ageChildren;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getPartnerJob(): ?string
    {
        return $this->partnerJob;
    }

    public function setPartnerJob(?string $partnerJob): self
    {
        $this->partnerJob = $partnerJob;

        return $this;
    }

    public function getHaveAllergy(): ?YesNo
    {
        return $this->haveAllergy;
    }

    public function setHaveAllergy(?YesNo $haveAllergy): self
    {
        $this->haveAllergy = $haveAllergy;

        return $this;
    }

    public function getAllergyDetails(): ?string
    {
        return $this->allergyDetails;
    }

    public function setAllergyDetails(?string $allergyDetails): self
    {
        $this->allergyDetails = $allergyDetails;

        return $this;
    }

    public function getEveryoneIsOk(): ?YesNo
    {
        return $this->everyoneIsOk;
    }

    public function setEveryoneIsOk(?YesNo $everyoneIsOk): self
    {
        $this->everyoneIsOk = $everyoneIsOk;

        return $this;
    }

    public function getHaveDog(): ?YesNo
    {
        return $this->haveDog;
    }

    public function setHaveDog(?YesNo $haveDog): self
    {
        $this->haveDog = $haveDog;

        return $this;
    }

    public function getDogDetails(): ?string
    {
        return $this->dogDetails;
    }

    public function setDogDetails(?string $dogDetails): self
    {
        $this->dogDetails = $dogDetails;

        return $this;
    }

    public function getHaveCat(): ?YesNo
    {
        return $this->haveCat;
    }

    public function setHaveCat(?YesNo $haveCat): self
    {
        $this->haveCat = $haveCat;

        return $this;
    }

    public function getCatDetails(): ?string
    {
        return $this->catDetails;
    }

    public function setCatDetails(?string $catDetails): self
    {
        $this->catDetails = $catDetails;

        return $this;
    }

    public function getHaveOtherAnimal(): ?YesNo
    {
        return $this->haveOtherAnimal;
    }

    public function setHaveOtherAnimal(?YesNo $haveOtherAnimal): self
    {
        $this->haveOtherAnimal = $haveOtherAnimal;

        return $this;
    }

    public function getAnimalSterilized(): ?YesNo
    {
        return $this->animalSterilized;
    }

    public function setAnimalSterilized(?YesNo $animalSterilized): self
    {
        $this->animalSterilized = $animalSterilized;

        return $this;
    }

    public function getSterilizedDetail(): ?string
    {
        return $this->sterilizedDetail;
    }

    public function setSterilizedDetail(?string $sterilizedDetail): self
    {
        $this->sterilizedDetail = $sterilizedDetail;

        return $this;
    }

    public function getCanBeIsolated(): ?YesNo
    {
        return $this->canBeIsolated;
    }

    public function setCanBeIsolated(?YesNo $canBeIsolated): self
    {
        $this->canBeIsolated = $canBeIsolated;

        return $this;
    }

    public function getVeterinary(): ?string
    {
        return $this->veterinary;
    }

    public function setVeterinary(?string $veterinary): self
    {
        $this->veterinary = $veterinary;

        return $this;
    }

    public function getLonelyHoursDay(): ?int
    {
        return $this->lonelyHoursDay;
    }

    public function setLonelyHoursDay(?int $lonelyHoursDay): self
    {
        $this->lonelyHoursDay = $lonelyHoursDay;

        return $this;
    }

    public function getLonelyHoursMorning(): ?int
    {
        return $this->lonelyHoursMorning;
    }

    public function setLonelyHoursMorning(?int $lonelyHoursMorning): self
    {
        $this->lonelyHoursMorning = $lonelyHoursMorning;

        return $this;
    }

    public function getLonelyHoursAfternoon(): ?int
    {
        return $this->lonelyHoursAfternoon;
    }

    public function setLonelyHoursAfternoon(?int $lonelyHoursAfternoon): self
    {
        $this->lonelyHoursAfternoon = $lonelyHoursAfternoon;

        return $this;
    }

    public function getLonelyHoursEvening(): ?int
    {
        return $this->lonelyHoursEvening;
    }

    public function setLonelyHoursEvening(?int $lonelyHoursEvening): self
    {
        $this->lonelyHoursEvening = $lonelyHoursEvening;

        return $this;
    }

    public function getDaysByWeek(): ?int
    {
        return $this->daysByWeek;
    }

    public function setDaysByWeek(?int $daysByWeek): self
    {
        $this->daysByWeek = $daysByWeek;

        return $this;
    }

    public function getLunchTime(): ?YesNo
    {
        return $this->lunchTime;
    }

    public function setLunchTime(?YesNo $lunchTime): self
    {
        $this->lunchTime = $lunchTime;

        return $this;
    }

    public function getSomeoneCanHelp(): ?YesNo
    {
        return $this->someoneCanHelp;
    }

    public function setSomeoneCanHelp(?YesNo $someoneCanHelp): self
    {
        $this->someoneCanHelp = $someoneCanHelp;

        return $this;
    }

    public function getDogHousing(): ?string
    {
        return $this->dogHousing;
    }

    public function setDogHousing(?string $dogHousing): self
    {
        $this->dogHousing = $dogHousing;

        return $this;
    }

    public function getDogCanAccesGarden(): ?YesNo
    {
        return $this->dogCanAccesGarden;
    }

    public function setDogCanAccesGarden(?YesNo $dogCanAccesGarden): self
    {
        $this->dogCanAccesGarden = $dogCanAccesGarden;

        return $this;
    }

    public function getNightHousingDog(): ?string
    {
        return $this->nightHousingDog;
    }

    public function setNightHousingDog(?string $nightHousingDog): self
    {
        $this->nightHousingDog = $nightHousingDog;

        return $this;
    }

    public function getWhoIsCarring(): ?string
    {
        return $this->whoIsCarring;
    }

    public function setWhoIsCarring(?string $whoIsCarring): self
    {
        $this->whoIsCarring = $whoIsCarring;

        return $this;
    }

    public function getDogWalkingPrevisional(): ?string
    {
        return $this->dogWalkingPrevisional;
    }

    public function setDogWalkingPrevisional(?string $dogWalkingPrevisional): self
    {
        $this->dogWalkingPrevisional = $dogWalkingPrevisional;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getMotivation(): ?string
    {
        return $this->motivation;
    }

    public function setMotivation(string $motivation): self
    {
        $this->motivation = $motivation;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getKnowingAmi(): ?string
    {
        return $this->knowingAmi;
    }

    public function setKnowingAmi(?string $knowingAmi): self
    {
        $this->knowingAmi = $knowingAmi;

        return $this;
    }

    public function getAggreedTerm(): ?YesNo
    {
        return $this->aggreedTerm;
    }

    public function setAggreedTerm(?YesNo $aggreedTerm): self
    {
        $this->aggreedTerm = $aggreedTerm;

        return $this;
    }

    public function getHousingAera(): ?int
    {
        return $this->housingAera;
    }

    public function setHousingAera(int $housingAera): self
    {
        $this->housingAera = $housingAera;

        return $this;
    }

    public function getGardenIsClotured(): ?YesNo
    {
        return $this->gardenIsClotured;
    }

    public function setGardenIsClotured(?YesNo $gardenIsClotured): self
    {
        $this->gardenIsClotured = $gardenIsClotured;

        return $this;
    }

    public function getHowManyDog(): ?int
    {
        return $this->howManyDog;
    }

    public function setHowManyDog(?int $howManyDog): self
    {
        $this->howManyDog = $howManyDog;

        return $this;
    }

    public function getAnimalDetails(): ?string
    {
        return $this->animalDetails;
    }

    public function setAnimalDetails(?string $animalDetails): self
    {
        $this->animalDetails = $animalDetails;

        return $this;
    }

    public function getIsAccepted(): ?bool
    {
        return $this->isAccepted;
    }

    public function setIsAccepted(?bool $isAccepted): self
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }
}
