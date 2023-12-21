<?php
namespace G4AS\Class;

use G4AS\Interface\I;
use G4AS\Interface\I2;
use G4AS\Trait\C;

class A implements I, I2
{
    const NAME = "A";
    public $name = self::NAME;

    use C;


    public function __construct(public string $first, public string $second)
    {
    }
    public function __toString(): string
    {
        return 'Class A: ' . $this->getName();
    }

    public function hello(): string
    {
        echo "Hello " . self::NAME . " ";
        return $this; // Retourne l'instance actuelle pour permettre l'enchaînement
    }

    public function world(): string
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
