<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\Email(
        message: 'L\'adresse {{ value }} n\'est une adresse e-mail valide.',
    )]
    private ?string $email = null;

    #[ORM\Column(length: 50)]
    private ?string $password = null;

    #[ORM\Column]
    private ?int $customersNb = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergy = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
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
