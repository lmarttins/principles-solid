<?php

namespace Solid\LSP;

class Driver
{
    public function go(Vehicle $vehicle)
    {
        $vehicle->startEngine();

        return $vehicle->accelerate();
    }
}