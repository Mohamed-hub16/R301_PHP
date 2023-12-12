<?php
class LetterChecker {
    public static function checkLetter($lettre) {

        switch (strtolower($lettre)) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                $isVoyelle= true;
                break;
            default:
                $isVoyelle = false;
        }

        $resultat = match ($isVoyelle) {
            true => "voyelle",
            false => "consonne",
        };

        return "La lettre '$lettre' est une $resultat";
    }
    /*  strtolower($lettre) c'est une conversion en lettre minuscule
        Dans le switch on tema si la lettre c'est une voyelle
        Ensuite on met $isVoyelle a true si oui et a false sinon
        Et du coup a la fin $resultat c'est "voyelle" ou "consonne" en fonction de $isVoyelle
    */

}?>
