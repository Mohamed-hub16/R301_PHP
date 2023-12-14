<?php

// faire une fonction qui fusionne 2 tableau en parametre
function fusion($tab1, $tab2)
{
    $tab3 = array_merge($tab1, $tab2);
    return $tab3;
}

// Afficher les 3 tableaux
$tab1 = array(1, 2, 3);
$tab2 = array(4, 5, 6);
$tab3 = fusion($tab1, $tab2);
print_r($tab1);
print_r($tab2);
print_r($tab3);


//  de la méthodeRetourne un tableau contenant le nom du fichier actuel, le nom de la classe et le nom
function getInfo()
{
    // Récupérer le nom du fichier
    $fileName = basename(__FILE__);

    // Récupérer le nom de la classe (si applicable)
    $className = __CLASS__;

    // Récupérer le nom de la méthode (si applicable)
    $methodName = __METHOD__;

    // Retourner les informations dans un tableau
    return array(
        'fileName' => $fileName,
        'className' => $className,
        'methodName' => $methodName
    );
}

// jeu de test
print_r(getInfo());






// preg_split() decoupe le tableau en caractères UNICODE | array_reverse() inverse le tableau | implode() rassemble les caractères en une chaine de caractères
$inverserChaine = fn($chaine) => implode('', array_reverse(preg_split('//u', $chaine, -1, PREG_SPLIT_NO_EMPTY)));

$chaine = "èçì… Hello World!";
$chaineInverse = $inverserChaine($chaine);

echo $chaineInverse;


class MaClasse implements Stringable
{
    public function __toString(): string
    {
        return "MaClasse";
    }
}

$monInstance = new MaClasse();

echo $monInstance;











