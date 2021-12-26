<?php

namespace App\DTO;

use App\Entity\Passenger;
use App\Entity\Tiket;

class BookingDTO
{

    private $passenger;
    private $dateTime;

//    public function makeFromEntity(Passenger $passenger)
//    {
//        $dto = new self();
//
//        $dto->setPassenger($passenger->getName());
//
//        return $dto;
//
//    }

    public function getPassenger(): ?string
    {
        return $this->passenger;
    }

    public function setPassenger(?string $passenger): void
    {
        $this->passenger = $passenger;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function setDateTime($dateTime): void
    {
        $this->dateTime = $dateTime;
    }


}