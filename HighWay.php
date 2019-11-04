<?php

abstract class HighWay
{
    protected $currentVehicles =[] ;
    protected $nbLane ;
    protected $maxSpeed ;

    public function __construct($currentVehicles, $nbLane, $maxSpeed)
    {
        $this->currentVehicle=$currentVehicles;
        $this->nbLane=$nbLane;
        $this->maxSpeed=$maxSpeed;
    }

    abstract protected function addVehicle(object $vehicles);

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    public function setCurrentVehicles($currentVehicles)
    {
        $this->nbLane=$nbLane;
    }

    public function getNbLane()
    {
        return $this->nbLane;
    }
    public function setNbLane($currentVehicles)
    {
        $this->nbLane=$nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($currentVehicles)
    {
        $this->maxSpeed=$maxSpeed;
    }
}


?>
