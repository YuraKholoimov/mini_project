<?php

namespace App\DTO;

class BookingDTO
{

    private ?string $flight;
    private ?string $passenger;
    private \DateTime $dateTime;


    public function getFlight(): ?string
    {
        return $this->flight;
    }

    public function setFlight(?string $flight): void
    {
        $this->flight = $flight;
    }

    public function getPassenger(): ?string
    {
        return $this->passenger;
    }

    public function setPassenger(?string $passenger): void
    {
        $this->passenger = $passenger;
    }

    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }


}