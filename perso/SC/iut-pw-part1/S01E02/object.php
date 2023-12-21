<?php
// object.php

// Définition d'une classe appelée ExempleClasse
class ExempleClasse {
    // Définition d'une constante de classe
    const CONSTANTE_EXEMPLE = "Bonjour, je suis une constante !";

    // Déclaration d'une variable de classe
    public $variableExemple;

    // Constructeur de la classe, appelé lors de l'instanciation de la classe
    public function __construct($valeur) {
        // Initialisation de la variable de classe avec la valeur passée en paramètre
        $this->variableExemple = $valeur;
    }

    // Méthode de la classe qui affiche des informations
    public function afficherInfo() {
        // Affiche la valeur de la constante de classe
        echo self::CONSTANTE_EXEMPLE . PHP_EOL; //. PHP_EOL permet l'ajout d'un saut de ligne.

        // Affiche la valeur de la variable de classe
        echo "Variable de classe : " . $this->variableExemple . PHP_EOL;
    }
}

