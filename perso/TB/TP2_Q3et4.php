<?php

// Définit une classe abstraite
abstract class ClasseAbstraite {
    abstract public function abstractMethod();
}

// Définit une interface
interface MonInterface {
    public function interfaceMethod();
}

// Définit une classe qui hérite d'une classe abstraite et implémente une interface
class MaClasse extends ClasseAbstraite implements MonInterface {
    public function abstractMethod() {
        print("texte de la méthode abstraite de la classe abstraite !\n");
    }

    public function interfaceMethod() {
        print("texte de l'interface\n");
    }
}

$obj = new MaClasse();

$obj->abstractMethod();
$obj->interfaceMethod();

// Fonction qui trie un tableau
/**
 * @param array $tableau tableau à trier
 *
 * @return array tableau trié
 */
function sortTable(array $tableau){
    sort($tableau);
    return $tableau;
}

// Appel de la fonction de tri
$tableauTri = sortTable([0, 2, 1, 0, 58, 7]);
print_r($tableauTri);
?>
