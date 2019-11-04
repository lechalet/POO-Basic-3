<?php

namespace App;

abstract class HighWay
{
    private $currentVehicles = [];
    private $nbLane;
    private $maxSpeed;

    public function getCurrentVehicles()
    {
       return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehiclesSentByUsers)
    {
        $this->currentVehicles = $currentVehiclesSentByUsers;
    }

    public function getNbLane()
    {
        return $this->nbLanee;
    }

    public function setNbLane($nbLaneSentByUsers)
    {
        $this->nbLane = $nbLaneSendByUsers;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeedSendByUsers)
    {
        $this->maxSpeed = $maxSpeedSentByUsers;
    }

    abstract public function addVehicle($vehicleSentByUsers);

}