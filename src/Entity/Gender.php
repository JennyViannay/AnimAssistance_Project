<?php

namespace App\Entity;

use App\Repository\GenderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenderRepository::class)
 */
class Gender
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Rescue::class, mappedBy="gender")
     */
    private $rescues;

    public function __toString()
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->rescues = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Rescue[]
     */
    public function getRescues(): Collection
    {
        return $this->rescues;
    }

    public function addRescue(Rescue $rescue): self
    {
        if (!$this->rescues->contains($rescue)) {
            $this->rescues[] = $rescue;
            $rescue->setGender($this);
        }

        return $this;
    }

    public function removeRescue(Rescue $rescue): self
    {
        if ($this->rescues->removeElement($rescue)) {
            // set the owning side to null (unless already changed)
            if ($rescue->getGender() === $this) {
                $rescue->setGender(null);
            }
        }

        return $this;
    }
}
