<?php

namespace G4AS;
#[\Attribute]
class R301Attribute{
}
spl_autoload_register(function ($namespace) {

    /**
     * explication autoloader:
     * moyen de charger de manière automatique un fichier chaque fois qu'un namespace est manquant.
     * le preg_match va essayer de rechercher des namespaces passé via un USE.
     * Si il n'est pas trouvé alors l'autoloader va chercher à l'inclure en utilisant INCLUDE.
     *
     */
    preg_match('/G4AS\\\\(?:Class|Trait|Interface)\\\\([^\\\\]+)/', $namespace, $resultats);

    if(!empty($resultats[1])) {
        include($resultats[1] . '.php');
    }

    // var_dump($namespace, $resultats); exit;

});
use G4AS\Class\A;
use G4AS\Class\B;
use G4AS\Trait\C;

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
echo $objetA->hello() . " " . $objetA->world();


echo "<br>";
$MethodName = B::helloMethod();
echo $MethodName;