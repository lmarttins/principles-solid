<?php

namespace Solid\SRP;

interface RuleCalculationInterface
{
    /**
     * Calculate salary employee.
     *
     * @param  Employee $employee
     * @return float
     */
    public function calculate(Employee $employee): float;
}