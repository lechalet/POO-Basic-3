<?php

namespace App;

class Bike extends Vehicle implements RechargeableInterface
{

    public $maxSpeed;


    public function switchOn(int $percentage)
    {
        if ( $percentage > 10)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    public function switchOff(int $percentage)
    {
        return false;
    }
}