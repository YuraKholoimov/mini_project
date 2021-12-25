<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 *
 * @ORM\Entity()
 */
class Flight
{
    /**
     * @ORM\Id()
     * @ORM\OneToMany(targetEntity="App\Entity\Tiket")
     * @ORM\Column(name="flight_number", type="string", length=255)
     */
    private string $flightNumber;

    /**
     * @ORM\Column(name="departure", type="string")
     */
    private string $departure;

    /**
     * @ORM\Column(name="arrival", type="string")
     */
    private string $arrival;

    /**
     * @ORM\Column(name="flight_status", type="text", options={"default" : 0})
     */
    private string $flightStatus;

    /**
     * @ORM\Column(name="time_to_destination", type="time")
     */
    private DateTime $timeToDestination;

    /**
     * @ORM\Column(name="flight_price", type="integer")
     */
    private int $flightPrice;

    public function __construct(string $flightNumber, string $departure, string $arrival, int $flightPrice)
    {
        $this->flightNumber = $flightNumber;
        $this->departure = $departure;
        $this->arrival = $arrival;
        $this->flightPrice = $flightPrice;
    }

    /**
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->flightNumber;
    }

    /**
     * @param string $flightNumber
     */
    public function setFlightNumber(string $flightNumber): void
    {
        $this->flightNumber = $flightNumber;
    }

    /**
     * @return string
     */
    public function getDeparture(): string
    {
        return $this->departure;
    }

    /**
     * @param string $departure
     */
    public function setDeparture(string $departure): void
    {
        $this->departure = $departure;
    }

    /**
     * @return string
     */
    public function getArrival(): string
    {
        return $this->arrival;
    }

    /**
     * @param string $arrival
     */
    public function setArrival(string $arrival): void
    {
        $this->arrival = $arrival;
    }

    /**
     * @return string
     */
    public function getFlightStatus(): string
    {
        return $this->flightStatus;
    }

    /**
     * @param string $flightStatus
     */
    public function setFlightStatus(string $flightStatus): void
    {
        $this->flightStatus = $flightStatus;
    }

    /**
     * @return DateTime
     */
    public function getTimeToDestination(): DateTime
    {
        return $this->timeToDestination;
    }

    /**
     * @param DateTime $timeToDestination
     */
    public function setTimeToDestination(DateTime $timeToDestination): void
    {
        $this->timeToDestination = $timeToDestination;
    }

    /**
     * @return float
     */
    public function getFlightPrice(): float
    {
        return $this->flightPrice;
    }

    /**
     * @param float $flightPrice
     */
    public function setFlightPrice(float $flightPrice): void
    {
        $this->flightPrice = $flightPrice;
    }


}