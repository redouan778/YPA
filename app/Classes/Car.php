<?php

namespace App\Classes;

class Car extends Vehicle{

    protected $panoramic_roof;

    public function __construct()
    {
        dd('hoi');
        $this->addFuel($this->currentFuel, $this->amount);
    }
}

