<?php
namespace   App\Tests\Util;
use App\Util\G4A;
use PHPUnit\Framework\TestCase;

class G4ATest extends TestCase
{
    private $g4a;

    protected function setUp(): void
    {
        $this->g4a = new G4A();
    }

    public function testMettreMajuscule()
    {
        $this->assertEquals("TEST", $this->g4a->mettreMajuscule("test"));
    }
}
