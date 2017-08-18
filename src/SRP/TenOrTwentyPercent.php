<?php

namespace Solid\SRP;

class TenOrTwentyPercent implements RuleCalculationInterface
{
    public function calculate(Employee $employee): float
    {
        if ($employee->getSalary() > 3.000) {
            return $employee->getSalary() * 0.8;
        }

        return $employee->getSalary() * 0.9;
    }
}