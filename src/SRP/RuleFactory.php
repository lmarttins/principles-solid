<?php

namespace Solid\SRP;

class RuleFactory
{
    const DEVELOPER = 'developer';

    const DBA = 'dba';

    public function rule(Employee $employee)
    {
        switch ($employee->getOffice()) {
            case self::DEVELOPER:
                return new TenOrTwentyPercent();
            break;
            case self::DBA:
                return new FifteenOrTwentyFivePercent();
            break;
        }
    }
}