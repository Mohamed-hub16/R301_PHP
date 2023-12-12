<?php

//1 A simple I interface with only a hello() method signature.
interface I
{
    public function hello();
}

//2 A simple I2 interface with only a world() method signature.

interface I2
{
    public function world();
}

/* 3
A simple A class:
which implements I and I2
with a hello() method and and a simple world() method (which respectively return "Hello A " and "World A!"), type their returns as strings.

 */

class A implements I, I2
{
    const NAME = "A";
    public $name = "A";


    public function hello()
    {
        return "Hello A";
    }

    public function world()
    {
        return "World A!";
    }


    public function getName(){
        echo self::NAME;
        echo static::NAME;

    }

}

//A simple B class which inherits from A and overloads both methods (methods respectively return "Hello B " and "World B!").
class B extends A
{
    const NAME = "B";
    public $name= "B";

    public function hello()
    {
        return "Hello B";
    }

    public function world()
    {
        return "World B!";
    }

    use C {
        hello as helloC;
        world as worldC;
    }


    public function arrow($inputString){
        return "Hello " .   $inputString;
    }
}

//A simple C trait with the same methods as A (which respectively return "Hello C " and "World C!").
trait C
{
    //public $name = "C";*
    //const NAME = "C";

    public function hello()
    {
        return "Hello C";
    }

    public function world()
    {
        return "World C!";
    }

}

//Make B use C and call the methods from A, B, C (echo the returned strings).
$objetA = new A();
$objetB = new B();

echo $objetA->hello() . " " . $objetA->world();
echo $objetB->hello() . " " . $objetB->world();
echo $objetB->helloC() . " " . $objetB->worldC();

echo $objetA->getName();
echo $objetB->getName();


//echo $objetA->arrow("Test");

//Add class variables $name = "A" in class A and $name = "B" in class B and $name = "C" in trait C. And a CONSTANT class constant.

//Create an arrow function that takes a $inputString string as an argument and returns "Hello " . $input. Call it.
$arrowFunction = fn($inputString) => "Hello " . $inputString;
echo $arrowFunction("John");