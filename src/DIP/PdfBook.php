<?php

namespace Solid\DIP;

class PdfBook implements EbookInterface
{
    /**
     * Simple read PDF book.
     *
     * @return string
     */
    public function read(): string
    {
        return 'reading a pdf book.';
    }
}