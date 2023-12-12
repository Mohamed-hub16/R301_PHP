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
                echo "$valeur est impair<br>";
            }

            $index++;
        } while ($index < $longueurTableau);
    }
}
?>
