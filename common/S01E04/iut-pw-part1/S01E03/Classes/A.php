<?php

namespace G4\Classes;

use G4\Interfaces\I;
use G4\Interfaces\I2;
use G4\Traits\C;

class A implements I, I2
{
    const NAME = "A";
    public $name = self::NAME;

    use C;

    public R301Attribute $R301Attribute;

    public function __construct(public string $first, public string $second)
    {
    }
    public function __toString(): string
    {
        return 'Class A: ' . $this->getName();
    }

    public function hello()
    {
        echo "Hello " . self::NAME . " ";
        return $this; // Retourne l'instance actuelle pour permettre l'enchaînement
    }

    public function world()
    {
        echo "World " . self::NAME . "!";
        return $this; // Retourne l'instance actuelle pour permettre l'enchaînement
    }


    public function getName()
    {
        return "Name is " . self::NAME . $this->name;
    }

    public function countTo10()
    {
        for ($j = 0; $j <= 9; $j++) {
            yield $j + 1;
        }
    }

    public function displayCountTo10()
    {
        $generator = $this->countTo10();
        foreach ($generator as $i) {
            echo $i;
        }
    }
}
