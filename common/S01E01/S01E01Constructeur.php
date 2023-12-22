<?php /*Utilise les constructions suivantes : foreach, for, if elseif, while, do, a?b:c*/

define('LIMITEUR_QUESTION', '**************************************************');
define('B', "<br>");

echo LIMITEUR_QUESTION . B;
echo "Question 4 : utilisez les constructions suivantes : for each, for, if else if, while, do, a?b:c" . B;
echo LIMITEUR_QUESTION . B;

echo "Teste de For each :" . B;

$colors = array ("red", "green", "blue");
echo "for each in array('red', 'green', 'blue') :" . B;
foreach ($colors as $value) { //boucle foreach pour chaque couleur
    echo "$value <br>"; //affiche la couleur
}

echo LIMITEUR_QUESTION . B;
echo "Teste de For :" . B;

echo "for i=0 ; i < count('red', 'green', 'blue'); i++ :" . B;
for ($i = 0; $i < count($colors); $i++) { //boucle for pour chaque couleur
    echo "$colors[$i] <br>"; //affiche la couleur
}

echo LIMITEUR_QUESTION . B;
echo "Teste de If else if :" . B;

$valeur = 15;
echo "valeur = "  . $valeur . B ;
if ($valeur > 0) { //si la valeur est supérieur à 0
    echo "La valeur est positive <br>"; //affiche la valeur est positive
} elseif ($valeur < 0) { //sinon si la valeur est inférieur à 0
    echo "La valeur est négative <br>"; //affiche la valeur est négative
} else { //sinon
    echo "La valeur est nulle <br>"; //affiche la valeur est nulle
}

$valeur = -12;
echo "valeur = "  . $valeur . B ;
if ($valeur > 0) { //si la valeur est supérieur à 0
    echo "La valeur est positive <br>"; //affiche la valeur est positive
} elseif ($valeur < 0) { //sinon si la valeur est inférieur à 0
    echo "La valeur est négative <br>"; //affiche la valeur est négative
} else { //sinon
    echo "La valeur est nulle <br>"; //affiche la valeur est nulle
}

$valeur = 0;
echo "valeur = "  . $valeur . B ;
if ($valeur > 0) { //si la valeur est supérieur à 0
    echo "La valeur est positive <br>"; //affiche la valeur est positive
} elseif ($valeur < 0) { //sinon si la valeur est inférieur à 0
    echo "La valeur est négative <br>"; //affiche la valeur est négative
} else { //sinon
    echo "La valeur est nulle <br>"; //affiche la valeur est nulle
}

echo LIMITEUR_QUESTION . B;
echo "Teste de While :" . B;

$valeur = 15;
echo "valeur = " . $valeur . B;
echo "while valeur > 0 :" . B;
while ($valeur > 0) { //tant que la valeur est supérieur à 0
    echo "La valeur est positive <br>"; //affiche la valeur est positive
    $valeur--; //décrémente la valeur
}

echo LIMITEUR_QUESTION . B;
echo "Teste de Do" . B;

echo "valeur = " . $valeur . B;
echo "do :" . B;
do { //fait
    echo "La valeur est positive<br>"; //affiche la valeur est positive
    $valeur--; //décrémente la valeur
} while ($valeur > -2); //tant que la valeur est supérieur à 0
echo "while (valeur > -2)" . B;

echo LIMITEUR_QUESTION . B;
echo "Teste de a?b:c :" . B;

$age = 18;
echo "age = " . $age . B;
echo "(age >= 8) ? 'adulte' : 'mineur' (si l'age est supérieur ou égal à 18, alors adulte sinon mineur :" . B; 
$status = ($age >= 18) ? "adulte" . B : "mineur" . B; //si l'age est supérieur ou égale à 18 alors adulte sinon mineur
echo $status; //affiche le status

echo LIMITEUR_QUESTION . B;
?>

