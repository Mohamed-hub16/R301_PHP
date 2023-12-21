<?php

use PHPUnit\Framework\TestCase;
use G4AS\Class\A;

class AHelloTest extends TestCase
{
    public function testToString()
    {
        $a = new A("firstValue", "secondValue");
        $this->assertEquals('Class A: Name is AA', $a->__toString());
    }


}
