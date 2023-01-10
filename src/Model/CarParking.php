<?php
declare(strict_types=1);

namespace App\Model;

use AbstractParking;

class CarParking extends AbstractParking implements ParkingInterface, EngineVehicleInterface
{
    protected function canPark(VehicleInterface $vehicle) :bool
    {
        return $vehicle instanceof EngineVehicleInterface && !($vehicle instanceof Bus);
    }
}