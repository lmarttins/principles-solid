<?php

namespace Solid\LSP;

abstract class Vehicle
{
    public function startEngine(): string
    {
        return 'motor ligado...';
    }

    public function accelerate(): string
    {
        return 'acelerando...';
    }
}