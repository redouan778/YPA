<?php

namespace App\Classes;

class Vehicle
{
    protected $vehicleName;
    protected $wheels;
    protected $wingMirror;
    protected $exhaust;
    protected $keys;
    protected $steeringWheel;
    protected $currentFuel = 50;
    protected $fuelStorage = 80;
    protected $amount = 10;

    use Fuel;
}


trait Fuel
{
    public function addFuel(int $currentFuel, int $amount)
    {

        dd('hoi');
        return $currentFuel + $amount;
    }

    public function decreasedFuel()
    {
        $amount = 0;
        $this->fuel = $this->fuel - $amount;
    }
}
