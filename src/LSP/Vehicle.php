<?php

namespace Solid\LSP;

abstract class Vehicle
{
    public function startEngine()
    {
        return 'motor ligado...';
    }

    public function accelerate()
    {
        return 'acelerando...';
    }
}