<?php

namespace Solid\OCP;

class Progress
{
    /**
     * @var MeasurableInterface
     */
    private $measurable;

    public function __construct(MeasurableInterface $measurable)
    {
        $this->measurable = $measurable;
    }

    public function getAsPercent()
    {
        return round($this->measurable->getSend() * 100 / $this->measurable->getLength());
    }
}