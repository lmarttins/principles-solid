<?php

namespace Solid\DIP;

class MobiBook implements EbookInterface
{
    /**
     * Simple read Mobi book.
     *
     * @return string
     */
    public function read(): string
    {
        return 'reading a mobi book.';
    }
}