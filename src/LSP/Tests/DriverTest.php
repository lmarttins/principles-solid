<?php

namespace Solid\LSP\Tests;

use PHPUnit\Framework\TestCase;
use Solid\LSP\Driver;
use Solid\LSP\Car;

class DriverTest extends TestCase
{
    public function testCarStart()
    {
        $driver = new Driver();

        $vehicle = new Car();

        $this->assertRegExp('/acelerando/', $driver->go($vehicle));
    }
}