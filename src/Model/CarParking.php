<?php
declare(strict_types=1);

namespace App\Model;

class CarParking extends AbstractParking implements ParkingInterface
{
    public function canPark(VehicleInterface $vehicle): bool
    {
        if ($vehicle instanceof Bus) {
            return false;
        }
        return $vehicle instanceof EngineVehicleInterface;
    }
}
