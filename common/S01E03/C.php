<?php
namespace G4AS\Trait;
use G4AS\Class\B;
use G4AS\Class\A;

trait C
{
    public $traits_name = "C";
    const TRAIT_NAME = "C";  // Rename the constant to avoid conflicts with the class

    public function __toString() {
        return 'Trait C: ' . $this->traits_name;
    }

    public function hello()
    {
        return "Hello " . self::TRAIT_NAME;
    }

    public function world()
    {
        return "World " . self::TRAIT_NAME . "!";
    }
}
