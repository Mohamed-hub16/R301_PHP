<?php
use PHPUnit\Framework\TestCase;
use G4AS\Class\A;

class AToStringTest extends TestCase {
    public function testConstruct()
    {
        $obj = new A("firstValue", "secondValue");
        $this->assertEquals("firstValue", $obj->first);
        $this->assertEquals("secondValue", $obj->second);
    }
}
