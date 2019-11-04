<?php

namespace App;

class Car extends Vehicle
{
    public function switchOn(int $percentage)
    {
        return true;
    }

    public function switchOff(int $percentage)
    {
        return false;
    }
}
