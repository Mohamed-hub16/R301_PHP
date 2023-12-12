<?php
/*
Defines a class [your initials]Class (inside a namespace with your initials, like "WP\S01E01" with multiple methods (one f
or each item below) which:
Outputs a given string in capital letters, working with special characters (like "èçì…").
Escapes a given HTML string into their safe character equivalents.
Converts a given array as a string, all values being separated by ", ".
Verifies that a given string is a correct email.*/

namespace G4A;

class G4A
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
    public function lastChar($chaine)
    {
        //retourne le dernier caractère de la chaine
        return substr($chaine, -1);
    }
    // faire une fonction qui fusionne 2 tableau en parametre
    function fusion($tab1, $tab2)
    {
        $tab3 = array_merge($tab1, $tab2);
        return $tab3;
    }
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
}

$G4A = new G4A();
echo($G4A->mettreMajuscule("test"));
echo("<br>");
echo($G4A->charactereSpeciaux("test"));
echo(" | ");
echo($G4A->charactereSpeciaux("&<>\"'"));
echo("<br>");
echo($G4A->tableauEnString(["test", "test2", "test3"]));
echo("<br>");
echo($G4A->verifEmail("test"));
echo(" | ");
echo($G4A->verifEmail("test.test"));
echo(" | ");
echo($G4A->verifEmail("test@test"));
echo(" | ");
echo($G4A->verifEmail("test@test.com"));
echo("<br>");
echo($G4A->lastChar("test"));
echo("<br>");
echo($G4A->tableauEnString($G4A->fusion(["test", "test2", "test3"], ["test4", "test5", "test6"])));
echo("<br>");
echo($G4A->getInfo());





