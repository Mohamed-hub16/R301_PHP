<?php

namespace G4\Classes;
#[\Attribute]
class R301Attribute{
}

require 'Autoloader.php';

use G4\Classes\A;
use G4\Classes\B;
use G4\Traits\C;

$objetA = new A("","");
$objetB = new B("","");

echo $objetA. "<br>";
echo $objetB. "<br>";
echo $objetB->__toStringC(). "<br>";


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
echo "<br>";
echo $objetA->hello()->world();


echo "<br>";
$MethodName = B::helloMethod();
echo $MethodName;