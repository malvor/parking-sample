<?php
declare(strict_types=1);

namespace App\Model;

use App\ValueObject\Money;

interface ParkingInterface
{
    public function park(VehicleInterface $vehicle);

    public function getPrice(\DateTime $parkingStartDate, \DateTime $parkingEndDate): Money;
}

