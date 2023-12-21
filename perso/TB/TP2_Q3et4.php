<?php

// Defines an abstract class
abstract class AbstractClass {
    abstract public function abstractMethod();
}

// Definition d'une interface
interface MyInterface {
    public function interfaceMethod();
}

// Definition d'une classe Myclass qui herite d'une classe abstraite et qui implemente une interface
class MyClass extends AbstractClass implements MyInterface {
    public function abstractMethod() {
        print("Text from the abstract method of the abstract class !\n");
    }

    public function interfaceMethod() {
        print("Text from the interface method !\n");
    }
}

$obj = new MyClass();

$obj->abstractMethod();    // Appel de la methode herite de la classe abstraite
$obj->interfaceMethod();   // ppel de la methode qui implemente l'interface

// Function that sorts an array
/**
 * @param array $array la liste qui va etre trie
 *
 * @return array liste trie
 */
function sortArray(array $array){
    sort($array);
    return $array;
}

// Calling the sorting function
$sortedArray = sortArray([0, 2, 1, 0, 58, 7]);
print_r($sortedArray);
?>
