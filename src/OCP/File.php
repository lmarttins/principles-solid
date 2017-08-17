<?php

namespace Solid\OCP;

class File implements MeasurableInterface
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
     * Set length file.
     *
     * @param float $length
     */
    public function setLength(float $length)
    {
        $this->length = $length;
    }

    /**
     * Set send file.
     *
     * @param float $send
     */
    public function setSend(float $send)
    {
        $this->send = $send;
    }

    /**
     * Get length file.
     *
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Get send file.
     *
     * @return float
     */
    public function getSend(): float
    {
        return $this->send;
    }
}