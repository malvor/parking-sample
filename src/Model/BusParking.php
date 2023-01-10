<?php
declare(strict_types=1);

namespace App\Model;

use AbstractParking;

class BusParking extends AbstractParking implements ParkingInterface
{
    protected function canPark(VehicleInterface $vehicle) :bool
    {
        return $vehicle instanceof Bus;
    }
}