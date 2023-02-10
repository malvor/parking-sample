<?php
declare(strict_types=1);

namespace App\Model;

class BikeParking extends AbstractParking implements ParkingInterface
{
    public function canPark(VehicleInterface $vehicle): bool
    {
        return $vehicle instanceof Bike; 
    }
}
