<?php
use PHPUnit\Framework\TestCase;
use G4AS\Class\A;

class ADisplayCountTest extends TestCase {
    public function testDisplayCountTo10()
    {
        $obj = new A("first", "second");
        ob_start();
        $obj->displayCountTo10();
        $output = ob_get_clean();

        $this->assertEquals("12345678910", $output);
    }


}
