<?php

namespace App\Model;

use \DateTime;

class Contractor
{
    private int $id;
    private string $nip;
    private string $regon;
    private string $name;
    private bool $isVatPayment;
    private string $street;
    private string $houseNumber;
    private string $apartmentNumber;
    private bool $status;
    private DateTime $createdAt;
    private DateTime $updatedAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
         $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNip(): string
    {
        return $this->nip;
    }

    public function setNip(string $nip): void
    {
        $this->nip = $nip;
    }

    public function getRegon(): string
    {
        return $this->regon;
    }

    public function setRegon(string $regon): void
    {
        $this->regon = $regon;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    public function getApartmentNumber(): string
    {
        return $this->apartmentNumber;
    }

    public function setApartmentNumber(string $apartmentNumber): void
    {
        $this->apartmentNumber = $apartmentNumber;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdateAt(DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}