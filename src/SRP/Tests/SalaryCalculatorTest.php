<?php

namespace Solid\SRP\Tests;

use PHPUnit\Framework\TestCase;
use Solid\SRP\RuleFactory;
use Solid\SRP\SalaryCalculator;
use Solid\SRP\Employee;

class SalaryCalculatorTest extends TestCase
{
    public function testCanGetTheCalculationOfRuleDeveloper()
    {
        $employee = (new Employee())
            ->setOffice('developer')
            ->setSalary(3000.0);

        $factory = new RuleFactory();

        $calculator = new SalaryCalculator($factory);

        $this->assertEquals(2400,
            $calculator->calculate($employee)->calculate($employee));
    }

    public function testCanGetTheCalculationOfRuleDba()
    {
        $employee = (new Employee())
            ->setOffice('dba')
            ->setSalary(2000.0);

        $factory = new RuleFactory();

        $calculator = new SalaryCalculator($factory);

        $this->assertEquals(1700,
            $calculator->calculate($employee)->calculate($employee));
    }
}