<?php
function mergeStrings() {
    $mergedString = "";
    $numberOfArguments = func_num_args();
    for ($i = 0; $i < $numberOfArguments; $i++) {
        $mergedString .= func_get_arg($i);
    }
    return $mergedString;
}

echo mergeStrings("Hello", " ", "World", "! \n");

function isVariableEmpty($variable) {
    return empty($variable) ? "Variable is empty." : "Variable is not empty.";
}


echo isVariableEmpty("Hello World!");
echo ("\n");
echo isVariableEmpty("");
echo ("\n");
class MyClass {
    public function printClassName() {
        echo __CLASS__ . "\n";
        echo static::class . "\n";
    }
}
$myClass = new MyClass();
$myClass->printClassName();

$myClass2 = new MyClass();
$myClass2->printClassName();


function throwException() {
    throw new Exception("Exception thrown \n");
}
try {
    throwException();
} catch (Exception $e) {
    echo $e->getMessage();
}
