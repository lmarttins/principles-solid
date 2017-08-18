<?php

namespace Solid\SRP;

class FifteenOrTwentyFivePercent implements RuleCalculationInterface
{
    /**
     * Rule calculate employee salary.
     *
     * @param  Employee $employee
     * @return float
     */
    public function calculate(Employee $employee): float
    {
        if ($employee->getSalary() > 2000.0) {
            return $employee->getSalary() * 0.75;
        }

        return $employee->getSalary() * 0.85;
    }
}