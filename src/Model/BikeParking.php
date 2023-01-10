<?php
declare(strict_types=1);

namespace App\Model;

use AbstractParking;

class BikeParking extends AbstractParking implements ParkingInterface
{
    protected function canPark(VehicleInterface $vehicle) :bool
    {
        return $vehicle instanceof Bike;
    }
}