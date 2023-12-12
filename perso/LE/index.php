<?php 
/*
Defines a class [your initials]Class (inside a namespace with your initials, like "WP\S01E01" with multiple methods (one f
or each item below) which:
Outputs a given string in capital letters, working with special characters (like "èçì…").
Escapes a given HTML string into their safe character equivalents.
Converts a given array as a string, all values being separated by ", ".
Verifies that a given string is a correct email.*/

namespace LE;

class LE
{
    public function mettreMajuscule($chaine)    {
        //changer tout les caractères en majuscule
        $chaineMajuscule = strtoupper($chaine);
        return $chaineMajuscule;
    }

    public function charactereSpeciaux($chaine)
    {
        //remplace les caractères spéciaux par leur équivalent html
        return htmlspecialchars($chaine);
    }

    public function tableauEnString($tableau)
    {
        $chaine = "";
        $i = 0;
        //parcours le tableau et ajoute chaque valeur à la chaine
        foreach ($tableau as $valeur) {
            $chaine .= $valeur;
            if ($i != count($tableau) - 1) {
                $chaine .= ", " ;
            }
            $i++;
        }
        return $chaine ;
    }

    public function verifEmail($email)
    {
        //vérifie si l'email est valide
        $verif = filter_var($email, FILTER_VALIDATE_EMAIL);
        //affiche un message en fonction du résultat
        if ($verif === false) {
            return "L'email n'est pas valide";
        } else {
            return "L'email est valide";
        }
    }
}

$LE = new LE();
echo($LE->mettreMajuscule("test"));
echo("<br>");
echo($LE->charactereSpeciaux("test"));
echo(" | ");
echo($LE->charactereSpeciaux("&<>\"'"));
echo("<br>");
echo($LE->tableauEnString(["test", "test2", "test3"]));
echo("<br>");
echo($LE->verifEmail("test"));
echo(" | ");
echo($LE->verifEmail("test.test"));
echo(" | ");
echo($LE->verifEmail("test@test"));
echo(" | ");
echo($LE->verifEmail("test@test.com"));

