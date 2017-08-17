<?php

namespace Solid\OCP;

class Music implements MeasurableInterface
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $send;

    /**
     * Set length music.
     *
     * @param float $length
     */
    public function setLength(float $length)
    {
        $this->length = $length;
    }

    /**
     * Set send music.
     *
     * @param float $send
     */
    public function setSend(float $send)
    {
        $this->send = $send;
    }

    /**
     * Get length music.
     *
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Get send music.
     *
     * @return float
     */
    public function getSend(): float
    {
        return $this->send;
    }
}