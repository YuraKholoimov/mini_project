<?php

namespace App\DTO;

use App\Entity\Passenger;;

class PassengerDTO
{
    private ?string $surname;
    private ?string $name;
    private ?string $secondName;
    private ?string $passportSerial;
    private ?string $passportNumber;
//    public function __construct(string $surname, string $name, string $secondName, int $passportNumber, int $passportSerial)
//    {
//        $this->surname = $surname;
//        $this->name = $name;
//        $this->secondName = $secondName;
//        $this->passportSerial = $passportSerial;
//        $this->passportNumber = $passportNumber;
//    }
    public static function createFromEntity(Passenger $passenger): self
    {
        $dto = new self();

        $dto->setSurname($passenger->getSurname());
        $dto->setName($passenger->getName());
        $dto->setSecondName($passenger->getSecondName());
        $dto->setPassportSerial($passenger->getPassportSerial());
        $dto->setPassportNumber($passenger->getPassportNumber());

        return $dto;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(?string $secondName): void
    {
        $this->secondName = $secondName;
    }

    public function getPassportSerial(): ?string
    {
        return $this->passportSerial;
    }

    public function setPassportSerial(?string $passportSerial): void
    {
        $this->passportSerial = $passportSerial;
    }

    public function getPassportNumber(): ?string
    {
        return $this->passportNumber;
    }

    public function setPassportNumber(?string $passportNumber): void
    {
        $this->passportNumber = $passportNumber;
    }
}