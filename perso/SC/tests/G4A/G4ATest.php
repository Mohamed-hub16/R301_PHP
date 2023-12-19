<?php

use PHPUnit\Framework\TestCase;
use G4A\G4A;

class G4ATest extends TestCase
{
    public function testMettreMajuscule()
    {
        $g4a = new G4A();
        $result = $g4a->mettreMajuscule('test');
        $this->assertEquals('TEST', $result, 'The mettreMajuscule method should convert all characters to uppercase.');
    }
}
