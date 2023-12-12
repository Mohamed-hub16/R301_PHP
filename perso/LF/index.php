<?php
// Fonction qui va prendre en paramètre plusieurs chaines et qui va retourner la concaténation de toutes ces chaines.
function mergeStrings() {
    // Création d'une variable qui va contenir la concaténation de toutes les chaines.
    $mergedString = "";
    // Récupération du nombre d'arguments passés à la fonction.
    $numberOfArguments = func_num_args();
    // Parcours de tous les arguments passés à la fonction.
    for ($i = 0; $i < $numberOfArguments; $i++) {
        // Concaténation de la chaine courante à la chaine finale.
        $mergedString .= func_get_arg($i);
    }
    // Retour de la chaine finale.
    return $mergedString;
}
// Appel de la fonction mergeStrings avec plusieurs chaines en paramètre.
echo mergeStrings("Hello", " ", "World", "! \n");
// Fonction qui va prendre en paramètre une variable et qui va retourner un message si la variable est vide ou non.
function isVariableEmpty($variable) {
    // Retourne un message si la variable est vide, sinon retourne un autre message.
    return empty($variable) ? "Variable is empty." : "Variable is not empty.";
}

// Appel de la fonction isVariableEmpty avec une variable vide et une variable non vide.
echo isVariableEmpty("Hello World!");
echo ("\n");
// Appel de la fonction isVariableEmpty avec une variable vide et une variable non vide.
echo isVariableEmpty("");
echo ("\n");
// Classe qui va contenir une méthode qui va retourner le nom de la classe.
class MyClass {
    // Méthode qui va retourner le nom de la classe.
    public function printClassName() {
        // Affichage du nom de la classe.
        echo __CLASS__ . "\n";
        echo static::class . "\n";
    }
}
// Création d'une instance de la classe MyClass.
$myClass = new MyClass();
// Appel de la méthode printClassName de l'instance de la classe MyClass.
$myClass->printClassName();
// Création d'une instance de la classe MyClass.
$myClass2 = new MyClass();
// Appel de la méthode printClassName de l'instance de la classe MyClass.
$myClass2->printClassName();

// Fonction qui va lever une exception.
function throwException() {
    // Lève une exception.
    throw new Exception("Exception thrown \n");
}
try {
    // Appel de la fonction throwException.
    throwException();
    // Gestion de l'exception levée.
} catch (Exception $e) {
    // Affichage du message de l'exception.
    echo $e->getMessage();
}
