<?php

namespace Solid\OCP\Tests;

use Solid\OCP\File;
use PHPUnit\Framework\TestCase;
use Solid\OCP\Progress;
use Solid\OCP\Music;

class ProgressFileTest extends TestCase
{
    public function testItCanGetTheProgressOfAFileAsPercent()
    {
        $file = new File();
        $file->setLength(200);
        $file->setSend(100);

        $progress = new Progress($file);

        $this->assertEquals(50, $progress->getAsPercent());
    }

    public function testItCanGetTheProgressOfAMusicAsPercent()
    {
        $music = new Music();
        $music->setLength(3.3);
        $music->setSend(1.5);

        $progress = new Progress($music);

        $this->assertEquals(45, $progress->getAsPercent());
    }
}