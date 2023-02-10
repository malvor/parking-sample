<?php
declare(strict_types=1);

include "vendor/autoload.php";
include "config.php";

use App\Model;
use App\Model\BikeParking;
use App\Model\BusParking;
use App\Model\CarParking;
use App\ValueObject\Money;
use App\Model\Bus;
use App\Model\Car;

$rzeszow = new Model\City('Rzeszów', 'Polska', 210000, 36.9);

// $bikePark = new BikeParking(new Money(10), 2);
// $bikePark1 = new BikeParking(new Money(11), 15);
// $busPark = new BusParking(new Money(10), 12);
// $carPark = new CarParking(new Money(12), 22);

// $bus = new Bus();
// $car = new Car();

// $rzeszow->addNewParking($bikePark);
// $rzeszow->addNewParking($bikePark1);
// $rzeszow->addNewParking($busPark);
// var_dump($carPark->park($car));

// print_r($rzeszow->getTotalParkingCapacities());
