<?php
namespace G4\Classes;

use G4\Traits\C;

Class B extends A{
    const NAME = "B";
    public $name= "B";

    public function __toString(): string
    {
        return 'Class B: ' . $this->getName();
    }

    public function hello(){
        return "Hello B";
    }
    public function world(){
        return "World B!";
    }
    use \G4\Traits\C {
        C::hello as helloC;
        C::world as worldC;
    }
    public function arrow($inputString){
        return "Hello " .   $inputString;
    }
}