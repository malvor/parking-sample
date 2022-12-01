<?php
declare(strict_types=1);

namespace App\Model;

class ParkingTicket
{
    private $parkingStartDate;
    private $parkingEndDate;
    private $parking;
    private $vehicle;
    private $price;
    
    public function __construct (
        DateTime $parkingStartDate, 
        ParkingInterface $parking,
        VehicleInterface $vehicle,
        DateTime $parkingEndDate = null,
        Money $price = null
    ) {
        $this->parkingStartDate = $parkingStartDate;
        $this->parkingEndDate = $parkingEndDate;
        $this->parking = $parking;
        $this->vehicle = $vehicle;
        $this->price = $price;
    }

    public function getParkingStartDate()
    {
        return $this->parkingStartDate;
    }

    public function setParkingEndDate($parkingEndDate)
    {
        $this->parkingEndDate = $parkingEndDate;
    }

    public function getParkingEndDate()
    {
        return $this->parkingEndDate;
    }

    public function getParking()
    {
        return $this->parking;
    }

    public function getVehicle()
    {
        return $this->vehicle;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}