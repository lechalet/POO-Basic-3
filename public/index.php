<?php

require_once '../vendor/autoload.php';



$pedestrianWayObject = new App\PedestrianWay();
$skateboardOfQuentin = new App\Skateboard();


var_dump($pedestrianWayObject);
$pedestrianWayObject->addVehicle($skateboardOfQuentin);
var_dump($pedestrianWayObject);


$skateOfRomain = new App\Skateboard();
$bikeObject = new App\Bike();

var_dump($skateOfRomain);
var_dump($bikeObject->switchOff(12));
var_dump($skateOfRomain);