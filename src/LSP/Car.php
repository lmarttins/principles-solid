<?php

namespace Solid\LSP;

class Car extends Vehicle
{
    /**
     * Start engine.
     *
     * @return string
     */
    public function startEngine(): string
    {
        $this->engineIgnition();
        return parent::startEngine();
    }

    /**
     * Engine ignition.
     *
     * @return string
     */
    private function engineIgnition(): string
    {
        return 'procedimento de ignição...';
    }
}