<?php /*Utilise les constructions suivantes : foreach, for, if elseif, while, do, a?b:c*/

define('LIMITEUR_QUESTION', '**************************************************');
define('B', "<br>");

echo LIMITEUR_QUESTION . B;
echo "Question 4 : utilisez les constructions suivant : for each, for, if else if, while, do, a?b:c" . B;
echo LIMITEUR_QUESTION . B;

echo "For each :" . B;

$colors = array ("red", "green", "blue");
foreach ($colors as $value) { //boucle foreach pour chaque couleur
    echo "$value <br>"; //affiche la couleur
}

echo LIMITEUR_QUESTION . B;
echo "For :" . B;

for ($i = 0; $i < count($colors); $i++) { //boucle for pour chaque couleur
    echo "$colors[$i] <br>"; //affiche la couleur
}

echo LIMITEUR_QUESTION . B;
echo "If else if :" . B;

$valeur = 15;
if ($valeur > 0) { //si la valeur est supérieur à 0
    echo "La valeur est positive <br>"; //affiche la valeur est positive
} elseif ($valeur < 0) { //sinon si la valeur est inférieur à 0
    echo "La valeur est négative <br>"; //affiche la valeur est négative
} else { //sinon
    echo "La valeur est nulle <br>"; //affiche la valeur est nulle
}

echo LIMITEUR_QUESTION . B;
echo "While :" . B;

while ($valeur > 0) { //tant que la valeur est supérieur à 0
    echo "La valeur est positive <br>"; //affiche la valeur est positive
    $valeur--; //décrémente la valeur
}

echo LIMITEUR_QUESTION . B;
echo "Do" . B;

do { //fait
    echo "La valeur est positive<br>"; //affiche la valeur est positive
    $valeur--; //décrémente la valeur
} while ($valeur > -2); //tant que la valeur est supérieur à 0

echo LIMITEUR_QUESTION . B;
echo "a?b:c :" . B;

$age = 18;
$status = ($age >= 18) ? "adulte <br>" : "mineur <br>"; //si l'age est supérieur ou égale à 18 alors adulte sinon mineur
echo $status; //affiche le status

echo LIMITEUR_QUESTION . B;
?>

