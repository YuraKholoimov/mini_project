<?php

namespace App\Entity;

use App\DTO\PassengerDTO;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\PassengerRepository")
 *
 */
class Passenger
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(name="surname", type="text", length=255)
     */
    private string $surname;

    /**
     * @ORM\Column(name="name", type="text", length=255)
     */
    private string $name;

    /**
     * @ORM\Column(name="second_name", type="text", length=255)
     */
    private string $secondName;

    /**
     * @ORM\Column(name="passport_serial", type="integer")
     */
    private int $passportSerial;

    /**
     * @ORM\Column(name="passport_number", type="integer")
     */
    private int $passportNumber;

    public function __construct(string $surname, string $name, string $secondName, int $passportNumber, int $passportSerial)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->secondName = $secondName;
        $this->passportSerial = $passportSerial;
        $this->passportNumber = $passportNumber;

    }
    /**
     * @param PassengerDTO $dto
     * @return static
     */
    public static function createFromDTO(PassengerDTO $dto): self
    {
        return new self($dto->getSurname(),
            $dto->getName(),
            $dto->getSecondName(),
            $dto->getPassportSerial(),
            $dto->getPassportNumber()
        );
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getSecondName()
    {
        return $this->secondName;
    }

    public function setSecondName($secondName): void
    {
        $this->secondName = $secondName;
    }

    public function getPassportSerial()
    {
        return $this->passportSerial;
    }

    public function setPassportSerial($passportSerial): void
    {
        $this->passportSerial = $passportSerial;
    }

    public function getPassportNumber()
    {
        return $this->passportNumber;
    }

    public function setPassportNumber($passportNumber): void
    {
        $this->passportNumber = $passportNumber;
    }
}