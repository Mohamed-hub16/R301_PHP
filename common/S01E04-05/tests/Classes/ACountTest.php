<?php
use PHPUnit\Framework\TestCase;
use G4AS\Class\A;

class ACountTest extends TestCase {
    public function testCountTo10()
    {
        // Create an instance of class A
        $a = new A("firstValue", "secondValue");

        // Get the generator
        $generator = $a->countTo10();

        // Test that the generator yields numbers from 1 to 10
        $expected = 1;
        foreach ($generator as $number) {
            $this->assertEquals($expected, $number);
            $expected++;
        }

        // Check that the last number yielded was 10
        $this->assertEquals(10, $expected - 1);
    }
}
