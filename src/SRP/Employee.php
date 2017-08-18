<?php

namespace Solid\SRP;

class Employee
{
    /**
     * @var string
     */
    private $office;

    /**
     * @var float
     */
    private $salary;

    /**
     * Set employee office.
     *
     * @param  string $office
     * @return Employee
     */
    public function setOffice(string $office): Employee
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Set employee salaray.
     *
     * @param  float $salary
     * @return Employee
     */
    public function setSalary(float $salary): Employee
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get employee office.
     *
     * @return string
     */
    public function getOffice(): string
    {
        return $this->office;
    }

    /**
     * Get employee salary.
     *
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }
}