<?php

namespace Solid\LSP;

class Driver
{
    /**
     * Driver go.
     *
     * @param  Vehicle $vehicle
     * @return string
     */
    public function go(Vehicle $vehicle): string
    {
        $vehicle->startEngine();

        return $vehicle->accelerate();
    }
}