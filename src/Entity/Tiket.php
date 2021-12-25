<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Tiket
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="flight", type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\Flight")
     */
    private int $flight;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Passenger")
     * @ORM\Column(name="passenger" type="string")
     */
    private string $passenger;

    /**
     * @ORM\Column(name="departure_time", type="datetime")
     */
    private \DateTime $departureTime;

    /**
     * @ORM\Column(name="price", type="integer")
     */
    private int $price;

    /**
     * @ORM\Column(name="status", type="smallint", options={"default" : 0})
     */
    private int $status = 0;

    public function __construct(string $flight, $passenger, $departureTime, int $price, int $status)
    {
        $this->flight = $flight;
        $this->passenger = $passenger;
        $this->departureTime = $departureTime;
        $this->price = $price;
        $this->status = $status;

    }

    /**
     * @return int|string
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * @param int|string $flight
     */
    public function setFlight($flight): void
    {
        $this->flight = $flight;
    }

    /**
     * @return string
     */
    public function getPassenger(): string
    {
        return $this->passenger;
    }

    /**
     * @param string $passenger
     */
    public function setPassenger(string $passenger): void
    {
        $this->passenger = $passenger;
    }

    /**
     * @return DateTime
     */
    public function getDepartureTime(): DateTime
    {
        return $this->departureTime;
    }

    /**
     * @param DateTime $departureTime
     */
    public function setDepartureTime(DateTime $departureTime): void
    {
        $this->departureTime = $departureTime;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }



}