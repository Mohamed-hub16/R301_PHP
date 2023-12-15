<?php

namespace G4\Traits;

trait C
{
    const TRAIT_NAME = "C";  // Rename the constant to avoid conflicts with the class

    public function hello()
    {
        return "Hello " . self::TRAIT_NAME;
    }

    public function world()
    {
        return "World " . self::TRAIT_NAME . "!";
    }
}
