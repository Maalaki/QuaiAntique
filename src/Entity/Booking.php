<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $customersNb = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $arrivalTime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergy = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomersNb(): ?int
    {
        return $this->customersNb;
    }

    public function setCustomersNb(int $customersNb): self
    {
        $this->customersNb = $customersNb;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getArrivalTime(): ?\DateTimeInterface
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime(\DateTimeInterface $arrivalTime): self
    {
        $this->arrivalTime = $arrivalTime;

        return $this;
    }

    public function getAllergy(): ?string
    {
        return $this->allergy;
    }

    public function setAllergy(?string $allergy): self
    {
        $this->allergy = $allergy;

        return $this;
    }
}
