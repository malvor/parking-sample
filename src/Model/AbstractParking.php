<?php 

namespace App\Model;

use App\ValueObject\Money;

abstract class AbstractParking implements ParkingInterface
{
    protected Money $pricePerHour;
    protected int $numberOfPlaces;
    protected int $freePlaces;

    public function __construct(Money $pricePerHour, int $numberOfPlaces)
    {
        $this->pricePerHour   = $pricePerHour;
        $this->numberOfPlaces = $numberOfPlaces;
        $this->freePlaces     = $numberOfPlaces;
    }

    protected abstract function canPark(VehicleInterface $vehicle): bool;

    public function getFreePlaces(): int 
    {
        return $this->freePlaces;
    }

    public function getNumberOfPlaces(): int
    {
        return $this->numberOfPlaces;
    }

    public function park(VehicleInterface $vehicle): void
    {
        if (!$this->hasFreePlaces($vehicle)) {
            throw new \Exception("This vehicle can not park here!");
        } 
        if (!$this->canPark($vehicle)) {
            throw new \Exception("No more parking spaces!");
        }
        $this->freePlaces--;
    }

    public function getPrice(\DateTime $parkingStartDate, \DateTime $parkingEndDate): Money
    {
        $interval = $parkingStartDate->diff($parkingEndDate);
        $hours = $interval->h;
        $min = $interval->i;
        if ($min > 0) {
            $hours++;
        }
        return $this->pricePerHour->multiply($hours);
    }

    public function hasFreePlaces(): bool
    {
        return $this->freePlaces > 0;
    }
}
