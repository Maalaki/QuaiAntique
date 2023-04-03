<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use DateTimeInterface;
use App\Validator\Constraints\MaxPeoplePerTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $customersNb = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank]
    private ?DateTimeInterface $date = null;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotBlank]
    #[MaxPeoplePerTime]
    private ?DateTimeInterface $arrivalTime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergy = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Email(
        message: 'L\' adresse {{ value }} n\'est pas une adresse e-mail valide.',
    )]



    private ?string $email = null;

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

    public function getDate(): ?DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getArrivalTime(): ?DateTimeInterface
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime(DateTimeInterface $arrivalTime): self
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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
}
