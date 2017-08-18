<?php

namespace Solid\SRP;

class SalaryCalculator
{
    private $factory;

    public function __construct(RuleFactory $factory)
    {
        $this->factory = $factory;
    }

    public function calculate(Employee $employee)
    {
        return $this->factory->rule($employee);
    }
}