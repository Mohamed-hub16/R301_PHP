<?php
use PHPUnit\Framework\TestCase;
use G4AS\Class\A;

class ANameTest extends TestCase {
    public function testGetName()
    {
        // Create an instance of class A
        $a = new A("firstValue", "secondValue");

        // Assert that the getName method returns the expected value
        $expected = "Name is AA";
        $this->assertEquals($expected, $a->getName());
    }
}
