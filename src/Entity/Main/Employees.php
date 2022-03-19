<?php

namespace App\Entity\Main;

use App\Repository\Main\EmployeesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeesRepository::class)]
class Employees
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $firstname;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $job;

    #[ORM\Column(type: 'integer')]
    private $dailyCost;

    #[ORM\Column(type: 'datetime')]
    private $hiringDate;

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

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getDailyCost(): ?int
    {
        return $this->dailyCost;
    }

    public function setDailyCost(int $dailyCost): self
    {
        $this->dailyCost = $dailyCost;

        return $this;
    }

    public function getHiringDate(): ?\DateTimeInterface
    {
        return $this->hiringDate;
    }

    public function setHiringDate(\DateTimeInterface $hiringDate): self
    {
        $this->hiringDate = $hiringDate;

        return $this;
    }
}
