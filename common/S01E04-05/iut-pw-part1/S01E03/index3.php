<?php
namespace G4AS\Interfaces;
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

namespace G4AS\Class;
use G4AS\Trait\C;
/* 3
A simple A class:
which implements I and I2
with a hello() method and and a simple world() method (which respectively return "Hello A " and "World A!"), type their returns as strings.

 */
class A implements \G4AS\Interfaces\I, \G4AS\Interfaces\I2
{
    const NAME = "A";
    public $name = "A";

    public R301Attribute $R301Attribute;

    public function __construct(public string $first, public string $second ){
        
    }

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
        echo $this->name;
        echo static::NAME;

    }

    public function countTo10(){
        for ($j=0; $j<=9 ; $j++ ) {
            yield $j+1;
        }
    }

    public function displayCountTo10 (){
        $generator = $this->countTo10();
        foreach ($generator as $i) {
            echo $i;
        }
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
        C::hello as helloC;
        C::world as worldC;
    }


    public function arrow($inputString){
        return "Hello " .   $inputString;
    }
}

//A simple C trait with the same methods as A (which respectively return "Hello C " and "World C!").
namespace G4AS\Trait;
trait C
{
    public $traits_name = "C";
    const TRAITSNAME = "C";

    public function hello()
    {
        return "Hello C";
    }

    public function world()
    {
        return "World C!";
    }


}


namespace G4AS\Class;
#[\Attribute]
class R301Attribute{
}
//Make B use C and call the methods from A, B, C (echo the returned strings).
$objetA = new A("","");
$objetB = new B("","");

echo $objetA->hello() . " " . $objetA->world();
echo $objetB->hello() . " " . $objetB->world();
echo $objetB->helloC() . " " . $objetB->worldC();
echo "<br>";
echo $objetA->getName();
echo "<br>";
echo $objetB->getName();
echo "<br>";
$generatorA = $objetA->countTo10();
foreach ($generatorA as $i) {
    echo $i;
}
echo "<br>";

$generatorB = $objetA->countTo10();
foreach ($generatorB as $i) {
    echo $i;
}
echo "<br>";
//echo $objetA->arrow("Test");

//Add class variables $name = "A" in class A and $name = "B" in class B and $name = "C" in trait C. And a CONSTANT class constant.

//Create an arrow function that takes a $inputString string as an argument and returns "Hello " . $input. Call it.
$arrowFunction = fn($inputString) => "Hello " . $inputString;
echo $arrowFunction("John");
