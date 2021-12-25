<?php
//
//namespace App\Entity;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * @ORM\Entity("repositoryClass="App\Repository\AeroportRepository"")
// */
//class Aeroport
//{
//    /**
//     * @ORM\City()
//     * @ORM\Column(name="City", type="string", length=255)
//     */
//    private ?string $city;
//
//    /**
//     *
//     * @ORM\Column(name="aeroport_code", type="string")
//     */
//    private ?string $aeroport_code;
//
//    public function __construct(string $city, int $aeroport_code)
//    {
//        $this->city = $city;
//        $this->aeroport_code = $aeroport_code;
//    }
//
//    public function getCity(): string
//    {
//        return $this->city;
//    }
//
//    public function setCity(string $city): void
//    {
//        $this->city = $city;
//    }
//
//
//    public function getAeroportCode()
//    {
//        return $this->aeroport_code;
//    }
//
//    public function setAeroportCode($aeroport_code): void
//    {
//        $this->aeroport_code = $aeroport_code;
//    }
//
//}