<?php

// Defines an abstract class
abstract class AbstractClass {
    abstract public function abstractMethod();
}

// Defines an interface
interface MyInterface {
    public function interfaceMethod();
}

// Defines a class that inherits from an abstract class and implements an interface
class MyClass extends AbstractClass implements MyInterface {
    public function abstractMethod() {
        print("Text from the abstract method of the abstract class!\n");
    }

    public function interfaceMethod() {
        print("Text from the interface method\n");
    }
}

$obj = new MyClass();

$obj->abstractMethod();    // Calls the abstract method
$obj->interfaceMethod();   // Calls the interface method

// Function that sorts an array
/**
 * @param array $array array to be sorted
 *
 * @return array sorted array
 */
function sortArray(array $array){
    sort($array);
    return $array;
}

// Calling the sorting function
$sortedArray = sortArray([0, 2, 1, 0, 58, 7]);
print_r($sortedArray);
?>
