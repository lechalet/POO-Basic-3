<?php

require_once '../vendor/autoload.php';

$pedestrianWayObject = new App\PedestrianWay();
$skateboardOfQuentin = new App\Skateboard();


var_dump($pedestrianWayObject);
$pedestrianWayObject->addVehicle($skateboardOfQuentin);
var_dump($pedestrianWayObject);