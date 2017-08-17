<?php

namespace Solid\DIP\Tests;

use Solid\DIP\MobiBook;
use Solid\DIP\PdfBook;
use PHPUnit\Framework\TestCase;
use Solid\DIP\EbookReader;

class EbookReaderTest extends TestCase
{
    function testItCanReadAPDFBook()
    {
        $pdfBook = new PdfBook();
        $reader  = new EbookReader($pdfBook);

        $this->assertRegExp('/pdf book/', $reader->read());
    }

    function testItCanReadAMOBIBook()
    {
        $mobiBook = new MobiBook();
        $reader   = new EbookReader($mobiBook);

        $this->assertRegExp('/mobi book/', $reader->read());
    }
}