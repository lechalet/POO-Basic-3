<?php

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;


    final public function __construct($currentVehicles, $nbLane, $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(object $vehicle)
    {
        if ($Vehicle instanceof Bicycle || $vehicle instanceof Skateboard) 
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
