<?php
namespace G4AS\Class;

use G4AS\Class\A;
use G4AS\Trait\C;

Class B extends A{
    const NAME = "B";
    public $name= "B";

    public function __toString(): string
    {
        return 'Class B: ' . $this->getName();
    }

    public function hello(): string
    {
        return "Hello B";
    }
    public function world(): string
    {
        return "World B!";
    }
    use \G4AS\Trait\C {
        C::hello as helloC;
        C::world as worldC;
        C::__toString as __toStringC;
    }
    public function arrow($inputString){
        return "Hello " .   $inputString;
    }
    public static function helloMethod(){
        return "Hello";
    }
}