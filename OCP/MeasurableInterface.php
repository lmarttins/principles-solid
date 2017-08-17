<?php

namespace Solid\OCP;

interface MeasurableInterface
{
    public function getLength(): float;

    public function getSend(): float;
}