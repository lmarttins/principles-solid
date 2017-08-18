<?php

namespace Solid\LSP;

class Car extends Vehicle
{
    public function startEngine(): string
    {
        $this->engineIgnition();
        return parent::startEngine();
    }

    private function engineIgnition()
    {
        return 'procedimento de ignição...';
    }
}