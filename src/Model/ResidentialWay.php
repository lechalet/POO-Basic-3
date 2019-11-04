<?php

namespace App;

final class ResidentialWay extends HighWay
{
    private $nbLane = 2;
    private $maxSpeed = 50;

    public function addVehicle($vehicleSentByUser)
    {
        $this->currentVehicles[] = $vehicleSentByUser;
    }
}