<?php

namespace App;

interface RechargeableInterface
{
    public function switchOn(int $percentage);
    public function switchOff(int $percentage);
}