<?php

namespace Solid\DIP;

interface EbookInterface
{
    /**
     * Simple read ebook.
     *
     * @return string
     */
    public function read(): string;
}