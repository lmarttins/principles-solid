<?php

namespace Solid\DIP;

class EbookReader
{
    /**
     * @var EbookInterface
     */
    private $eBook;

    public function __construct(EbookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * Simple read ebook.
     *
     * @return string
     */
    public function read(): string
    {
        return $this->eBook->read();
    }
}