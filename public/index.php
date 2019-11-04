<?php
require_once '../src/HighWay.php';
require_once '../src/PedestrianWay.php';
require_once '../src/ResidentialWay.php';
require_once '../src/Vehicle.php';
require_once '../src/MotorWay.php';
require_once '../src/Car.php';
require_once '../src/Bicycle.php';

$kingsWay = new MotorWay();
$princessStreet = new ResidentialWay();
$sunLane = new PedestrianWay();
$simca = new Car('blue', 3, 'electric');
$renault = new Car('green', 3, 'electric');
$peugeot = new Bicycle('green',1);

$sunLane->addVehicle($simca);
$sunLane->addVehicle($peugeot);

var_dump($sunLane->getcurrentVehicles());

$princessStreet->addVehicle($simca);
$princessStreet->addVehicle($peugeot);

var_dump($princessStreet->getcurrentVehicles());
