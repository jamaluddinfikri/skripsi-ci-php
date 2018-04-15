<?php

require 'Skripsi.php';

class SkripsiTest extends PHPUnit_Framework_TestCase
{
    public $skripsiInstance;

    public function setUp()
    {
        $this->skripsiInstance = new Skripsi();
    }
    public function testIfWheelWorks(){

      $this->skripsiInstance->setSkripsi(100);

      $this->skripsiInstance->turnWheel();

      $this->assertEquals(99, $this->skripsiInstance->getSkripsi());
    }
}

 ?>
