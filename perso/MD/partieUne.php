<?php

// faire une fonction qui fusionne 2 tableau en parametre
function fusion($tab1, $tab2)
{
    $tab3 = array_merge($tab1, $tab2);
    return $tab3;
}


// Retourne un tableau contenant le nom du fichier actuel, le nom de la classe et le nom de la méthode
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


// preg_split() decoupe le tableau en caractères UNICODE | array_reverse() inverse le tableau | implode() rassemble les caractères en une chaine de caractères
$inverserChaine = fn($chaine) => implode('', array_reverse(preg_split('//u', $chaine, -1, PREG_SPLIT_NO_EMPTY)));

$chaine = "èçì… Hello World!";
$chaineInverse = $inverserChaine($chaine);


class MaClasse implements Stringable
{
    public function __toString(): string
    {
        return "MaClasse";
    }
}

$monInstance = new MaClasse();

echo $monInstance;











