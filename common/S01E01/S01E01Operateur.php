<?php /* Montre les opérateurs : =, ==, ===, ++, --, <=>, ||, &&, &, |, ??, ?:, ? : */
$a = 1;
$b = 2;
$c=3;

$a = $b; //a prend la valeur de b

if ($a == $b) { //si a est égale à b
    echo "a est égale à b <br>"; //affiche a est égale à b
} else { //sinon
    echo "a n'est pas égale à b <br>"; //affiche a n'est pas égale à b
}

if ($a === $b) { //si a est égale à b et du même type
    echo "a est égale à b et du même type <br>"; //affiche a est égale à b et du même type
} else { //sinon
    echo "a n'est pas égale à b et/ou du même type <br>"; //affiche a n'est pas égale à b et/ou du même type
}

$a++; //incrémente a
$b--; //décrémente b

echo "a = $a <br>"; //affiche a
echo "b = $b <br>"; //affiche b

if ($a <=> $b) { //compare a et b
    echo "a est supérieur à b <br>"; //affiche a est supérieur à b
} else { //sinon
    echo "a est inférieur à b <br>"; //affiche a est inférieur à b
}


if ($a || $b) { //si a ou b est vrai
    echo "a ou b est vrai <br>"; //affiche a ou b est vrai
} else { //sinon
    echo "a et b sont faux <br>"; //affiche a et b sont faux
}

if ($a && $b) { //si a et b sont vrai
    echo "a et b sont vrai <br>"; //affiche a et b sont vrai
} else { //sinon
    echo "a ou b est faux <br>"; //affiche a ou b est faux
}

if ($a & $b) { //si a et b sont vrai en binaire
    echo "a et b sont vrai <br>"; //affiche a et b sont vrai
} else { //sinon
    echo "a ou b est faux <br>"; //affiche a ou b est faux
}

if ($a | $b) { //si a ou b est vrai en binaire
    echo "a ou b est vrai <br>"; //affiche a ou b est vrai
} else { //sinon
    echo "a et b sont faux <br>"; //affiche a et b sont faux
}

$a = $c ?? $b; //si c existe alors a prend la valeur de c mais pas si il est null sinon a prend la valeur de b
$a = $c ?: $b; //si c existe alors a prend la valeur de c meme si il est null sinon a prend la valeur de b

if ($a ? $b : $c) { //si a est vrai alors b sinon c
    echo "a est vrai <br>"; //affiche a est vrai
} else { //sinon
    echo "a est faux <br>"; //affiche a est faux
}

?>