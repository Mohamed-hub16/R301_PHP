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

define('LIMITEUR_QUESTION', '**************************************************');
define('B', "<br>");

echo LIMITEUR_QUESTION . B;
echo "Travail sur les classes, les interfaces et les traits :" . B;
echo LIMITEUR_QUESTION . B;

echo "Nous avons une classe A, une classe B, un trait C, une interface I et une interface I2" . B;
echo LIMITEUR_QUESTION . B;

$objetA = new A("","");
$objetB = new B("","");

echo "Test de la méthode hello() de classe A : ";
echo $objetA->hello() . B;
echo "Test de la méthode world() de classe A : ";
echo $objetA->world() . B;

echo LIMITEUR_QUESTION . B;
echo "Test de la méthode hello() de la classe B : ";
echo $objetB->hello() . B;
echo "Test de la méthode world() de la classe B : ";
echo $objetB->world() . B;

echo LIMITEUR_QUESTION . B;
echo "Test de la méthode hello() du trait C à partir de la classe B : ";
echo $objetB->helloC() . B;
echo "Test de la méthode world() du trait C à partir de la classe B : ";
echo $objetB->worldC() . B;

echo LIMITEUR_QUESTION . B;
echo "Test de la méthode getName() de la classe A : ";
echo $objetA->getName() . B;

echo LIMITEUR_QUESTION . B;
echo "Test de la méthode getName() de la classe B : ";
echo $objetB->getName() . B;

echo LIMITEUR_QUESTION . B;
echo "Test de la méthode countTo10() de la classe A : " . B;
$generatorA = $objetA->countTo10();
foreach ($generatorA as $i) {
    echo $i . B; 
}

//echo $objetA->arrow("Test");

//Add class variables $name = "A" in class A and $name = "B" in class B and $name = "C" in trait C. And a CONSTANT class constant.

//Create an arrow function that takes a $inputString string as an argument and returns "Hello " . $input. Call it.

echo LIMITEUR_QUESTION . B;
echo "Test de ??? : ";
$arrowFunction = fn($inputString) => "Hello " . $inputString;
echo $arrowFunction("John");
