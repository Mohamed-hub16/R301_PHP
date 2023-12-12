<?php
class NumberChecker {
    public static function verifierNombresImpairs($tableau) {
        $index = 0;
        $longueurTableau = count($tableau); //Ca sert au while pour voir quand on a le dernier index du tableau

        do {
            $valeur = $tableau[$index];

            if (!is_numeric($valeur)) {
                $index++;                   // La on regarde si $valeur c'est un nombre sinon on passe a la valeur suivante dans le tableau
                continue;
            }

            if ($valeur % 2 !== 0) {    //Du coup on check si le resultat de la division euclidienne (si on rentre dans le if c'est un nombre impaire)
                echo "$valeur est impair\n";
            }

            $index++;
        } while ($index < $longueurTableau);
    }

}
?>
<?php
echo NumberChecker::verifierNombresImpairs([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
?>