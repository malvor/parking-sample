<?php

use App\Model\ParkingInterface;
use App\Model\VehicleInterface;
use App\ValueObject\Money;

abstract class AbstractParking extends Money implements ParkingInterface
{
    protected $numberOfPlaces;
    protected $pricePerHour;

    public function __construct($pricePerHour, int $numberOfPlaces)
    {
        $this->pricePerHour = $pricePerHour;
        $this->numberOfPlaces = $numberOfPlaces;
    }

    protected abstract function canPark(VehicleInterface $vehicle) :bool;

    public function park(VehicleInterface $vehicle) :bool
    {
        if (!$this->canPark($vehicle)) {
            throw new \Exception("This Vehicle cannot park here!");
        } 
        return true;
    }

    public function getPrice(\DateTime $parkingStartDate, \DateTime $parkingEndDate): Money
    {
        $interval = $parkingEndDate->diff($parkingStartDate)->h;
        return new Money($this->pricePerHour * $interval, $this->currency);
    }

    protected function hasFreePlace() :bool 
    {
        return $this->numberOfPlaces > 0;
    }
}

