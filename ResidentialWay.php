<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    final public function __construct($currentVehicles, $nbLane, $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) 
        {
            $this->currentvehicles[] = $vehicle;
        }
    }
}
