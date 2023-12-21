<?php /* Montre les opérateurs : =, ==, ===, ++, --, <=>, ||, &&, &, |, ??, ?:, ? : */

define('LIMITEUR_QUESTION', '**************************************************');
define('B', "<br>");

echo LIMITEUR_QUESTION . B;
echo "Question 3 : utilisez les operateurs =, ==, ===, ++, --, <=>, ||, &&, &, |, ??, ?:, ? :" . B;
echo LIMITEUR_QUESTION . B;

echo "= :" . B;

$a = 1;
$b = 2;
$c=3;

echo "a = " . $a . ", b = " . $b . B;

$a = $b; //a prend la valeur de b

echo "a = " . $a . ", b = " . $b .B;

echo LIMITEUR_QUESTION . B;
echo " == :" . B;

if ($a == $b) { //si a est égale à b
    echo "a est égal à b <br>"; //affiche a est égale à b
} else { //sinon
    echo "a n'est pas égal à b <br>"; //affiche a n'est pas égale à b
}

echo LIMITEUR_QUESTION . B;
echo " === :" . B;

if ($a === $b) { //si a est égal à b et du même type
    echo "a est égal à b et du même type <br>"; //affiche a est égal à b et du même type
} else { //sinon
    echo "a n'est pas égal à b et/ou n'est pas du même type <br>"; //affiche a n'est pas égale à b et/ou du même type
}

if ($a === "c") { //si a est égal à c et du même type
    echo "a est égal à c et du même type <br>"; //affiche a est égal à c et du même type
} else { //sinon
    echo "a n'est pas égal à c et/ou n'est pas du même type <br>"; //affiche a n'est pas égale à c et/ou du même type
}

echo LIMITEUR_QUESTION . B;
echo " ++ et -- :" . B;

echo "a = $a <br>"; //affiche a
echo "b = $b <br>"; //affiche b

$a++; //incrémente a
$b--; //décrémente b

echo "a = $a <br>"; //affiche a
echo "b = $b <br>"; //affiche b

echo LIMITEUR_QUESTION . B;
echo " <, =, > :" . B;

if ($a > $b) { //compare a et b
    echo "a est supérieur à b <br>"; //affiche a est supérieur à b
} else { //sinon
    echo "a est inférieur ou égal à b <br>"; //affiche a est inférieur à b
}

echo LIMITEUR_QUESTION . B;
echo " || :" . B;

if ($a || $b) { //si a ou b est vrai
    echo "a ou b est vrai <br>"; //affiche a ou b est vrai
} else { //sinon
    echo "a et b sont faux <br>"; //affiche a et b sont faux
}

echo LIMITEUR_QUESTION . B;
echo " && :" . B;

if ($a && $b) { //si a et b sont vrai
    echo "a et b sont vrai <br>"; //affiche a et b sont vrai
} else { //sinon
    echo "a ou b sont faux <br>"; //affiche a ou b est faux
}

echo LIMITEUR_QUESTION . B;
echo " & :" . B;

if ($a & $b) { //si a et b sont vrai en binaire
    echo "a et b sont vrai <br>"; //affiche a et b sont vrai
} else { //sinon
    echo "a ou b sont faux <br>"; //affiche a ou b est faux
}

echo LIMITEUR_QUESTION . B;
echo "| :" . B;

if ($a | $b) { //si a ou b est vrai en binaire
    echo "a ou b sont vrai <br>"; //affiche a ou b est vrai
} else { //sinon
    echo "a et b sont faux <br>"; //affiche a et b sont faux
}

echo LIMITEUR_QUESTION . B;
echo " ??, ?:, ? :" . B;

$a = $c ?? $b; //si c existe alors a prend la valeur de c mais pas si il est null sinon a prend la valeur de b
$a = $c ?: $b; //si c existe alors a prend la valeur de c meme si il est null sinon a prend la valeur de b

if ($a ? $b : $c) { //si a est vrai alors b sinon c
    echo "a est vrai <br>"; //affiche a est vrai
} else { //sinon
    echo "a est faux <br>"; //affiche a est faux
}

?>