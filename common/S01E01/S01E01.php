<?php

namespace G4A;

use Countable;
use Exception;
use Stringable;

define('LIMITEUR_QUESTION', '**************************************************');
define('B', "<br>");

echo LIMITEUR_QUESTION . B;
echo "Question 5 : créez une classe (dans un namespace) avec plusieurs méthodes :" . B;
echo LIMITEUR_QUESTION . B;

class G4A implements Stringable
{
    public function mettreMajuscule($chaine)    {
        //changer tout les caractères en majuscule
        $chaineMajuscule = mb_strtoupper($chaine, 'UTF-8');
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
    // preg_split() decoupe le tableau en caractères UNICODE | array_reverse() inverse le tableau | implode() rassemble les caractères en une chaine de caractères

    function inverserChaine($chaine)
    {
        return implode('', array_reverse(preg_split('//u', $chaine, -1, PREG_SPLIT_NO_EMPTY)));
    }




    public function __toString()
    {
        //retourne le nom de la classe
        return __CLASS__;
    }
    // Fonction qui va prendre en paramètre plusieurs chaines et qui va retourner la concaténation de toutes ces chaines.
    function mergeStrings() {
        // Création d'une variable qui va contenir la concaténation de toutes les chaines.
        $mergedString = "";
        // Récupération du nombre d'arguments passés à la fonction.
        $numberOfArguments = func_num_args();
        // Parcours de tous les arguments passés à la fonction.
        for ($i = 0; $i < $numberOfArguments; $i++) {
            // Concaténation de la chaine courante à la chaine finale.
            $mergedString .= func_get_arg($i);
        }
        // Retour de la chaine finale.
        return $mergedString;
    }
    function isVariableEmpty($variable) {
        // Retourne un message si la variable est vide, sinon retourne un autre message.
        return empty($variable) ? "Variable is empty." : "Variable is not empty.";
    }

    // Méthode qui va retourner le nom de la classe.
    public function printClassName() {
        // Affichage du nom de la classe.
        echo __CLASS__ . "\n";
        echo static::class . "\n";
    }
    function throwException() {// Fonction qui va lever une exception.
    // Lève une exception.
    throw new Exception("Exception thrown \n");
    }

    function trier_tableau_par_cle_decroissante ($tableau){
        krsort($tableau); //trie le tableau par clé décroissante
        return $tableau;
    }
    function element_present_dans_tab1_et_pas_dans_tab2($tab1, $tab2){
        $tableauElementsPasEnCommun = array(); //création du tableau
        foreach ($tab1 as $key => $value) { //pour chaque élément de tab1
            if (!in_array($value, $tab2)){ //si l'élément de tab1 n'est pas dans tab2
                array_push( $tableauElementsPasEnCommun,$value); // ajoute l'élément au tableau
            }
        }
        return $tableauElementsPasEnCommun;
    }

    function transforme_texte_en_format_titre($element)
    {

        if (is_string($element) && strlen($element) > 2) { // vérifie que l'élement du tableau est une chaîne de caractère et non un caractere simple
            $element = strtolower($element); //met tous les caractères en minuscules
            $element = ucwords($element); //met la première lettre de chaque mot en majuscule
        }
        return $element;

    }


    function transforme_tableau_en_format_titre($tableau)
    {
        return array_map(array($this,'transforme_texte_en_format_titre'), $tableau); // applique la fonction "transforme_texte_en_format_titre" à chaque élément du tableau
    }

    function longueur($variableacompter)
    {
        // compte string
        if (is_string($variableacompter)) {
            return strlen($variableacompter);
        } // compte tableau
        elseif (is_array($variableacompter)) {
            return count($variableacompter);
        } // compte élément Countable
        elseif ($variableacompter instanceof Countable) {
            return count($variableacompter);
        } // cas ou on peut pas compter par ex : int
        else {
            return "il n'est pas possible d'appliquer la longueur sur cet élément";
        }
    }


}
// class countable
class Comptable implements Countable
{
    private $elements;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    public function count() : int
    {
        return count($this->elements);
    }
}


$G4A = new G4A();

echo "Texte en majuscule :" . B;
echo "test -> ";
echo($G4A->mettreMajuscule("test"));
echo B;
echo "èçìàùéâêîôûëïüÿæœ -> ";
echo($G4A->mettreMajuscule("èçìàùéâêîôûëïüÿæœ"));

echo B . LIMITEUR_QUESTION . B;
echo "Caractères spéciaux :" . B;
echo($G4A->charactereSpeciaux("test"));
echo(" | ");
echo($G4A->charactereSpeciaux("&<>\"'")); // présentation a faire !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

echo B .LIMITEUR_QUESTION . B;
echo "Tableau en string :" . B;
echo "['test', 'test2', 'test3'] ->" ;
echo($G4A->tableauEnString(["test", "test2", "test3"]));

echo B .LIMITEUR_QUESTION . B;
echo "Vérication email :" . B;
echo "test -> ";
echo($G4A->verifEmail("test"));
echo B;
echo "test.test -> ";
echo($G4A->verifEmail("test.test"));
echo B;
echo "test@test -> ";
echo($G4A->verifEmail("test@test"));
echo B;
echo "test@test.com -> ";
echo($G4A->verifEmail("test@test.com"));

echo B .LIMITEUR_QUESTION . B;
echo "Dernier caractère :" . B;
echo "test -> ";
echo($G4A->lastChar("test"));

echo B .LIMITEUR_QUESTION . B;
echo "Fusion de tableau :" . B;
echo "Tableau 1 = [1, 2, 3]" . B;
echo "Tableau 2 = [4, 5, 6]" . B;
$tab1 = array(1, 2, 3);
$tab2 = array(4, 5, 6);
$tab3 = $G4A->fusion($tab1, $tab2);
echo "Tableau final :" . B;
print_r($tab3);

echo B .LIMITEUR_QUESTION . B;
echo "Informations fichier : " . B;
print_r($G4A->getInfo());

echo B .LIMITEUR_QUESTION . B;
echo "Inversion chaîne :" . B;
echo "èçì… Hello World! -> ";
echo ($G4A->inverserChaine("èçì… Hello World!"));

echo B .LIMITEUR_QUESTION . B;
echo "Classe actuelle :" . B;
echo $G4A;

echo B .LIMITEUR_QUESTION . B;
echo "Concaténation de chaîne :" . B;
echo "Hello + world + ! devient -> ";
echo ($G4A->mergeStrings("Hello", " ", "World", "! \n"));

echo B .LIMITEUR_QUESTION . B;
echo "Variable vide :" . B;
echo "Variable avec Hello world! -> ";
echo ($G4A->isVariableEmpty("Hello World!"));// Appel de la fonction isVariableEmpty avec une variable vide et une variable non vide.
echo B . "Variable vide -> ";
echo ($G4A->isVariableEmpty(""));// Appel de la fonction isVariableEmpty avec une variable vide et une variable non vide.

echo B .LIMITEUR_QUESTION . B;
echo "Nom de la classe :" . B;
$myClass = new G4A();// Création d'une instance de la classe G4A.
$myClass->printClassName();// Appel de la méthode printClassName de l'instance de la classe G4A.


echo B .LIMITEUR_QUESTION . B;
echo "Lancer une exeption :" . B;
echo ("try catch : ");
 try {
        $G4A->throwException();// Appel de la fonction throwException.
    } catch (Exception $e) {// Gestion de l'exception levée.
        echo $e->getMessage();// Affichage du message de l'exception.
    }


echo B .LIMITEUR_QUESTION . B;
echo "Tableau trié par clé décroissante :" . B;
$tab4 = array("test", "test2", "test3");
print "keys : ";
print_r (array_keys($G4A->trier_tableau_par_cle_decroissante($tab4)));

echo B .LIMITEUR_QUESTION . B;
echo "Valeur présente dans un tableau et pas dans un autre :" . B;
$tab5= array("test", "test2", "test3");
$tab6= array("test", "test2", "test5");
print_r ($G4A->element_present_dans_tab1_et_pas_dans_tab2($tab5, $tab6));

echo B .LIMITEUR_QUESTION . B;
echo "Transforme texte en format titre :" . B;
print ($G4A->transforme_texte_en_format_titre("coucou"));

$tableau = ["test", 3, 'c', "lLaA"];
print_r($G4A->transforme_tableau_en_format_titre($tableau));

echo B .LIMITEUR_QUESTION . B;
echo "Compter un type countable :" . B;
//cas countable
$comptable = new Comptable([1, 1, 1, 1]);
$longueurComptable = $G4A->longueur($comptable);
echo "Longueur de comptable : " . $longueurComptable;

echo B .LIMITEUR_QUESTION . B;
echo "Taille d'un tableau :" . B;

//cas tableau
$tableau = array(1, 2, 3, 4, 5);
echo "Longueur du tableau : " . $G4A->longueur($tableau);

echo B .LIMITEUR_QUESTION . B;
echo "Nombre de caractères dans une chaîne :" . B;
// cas string
$chaine = "yo";
echo "Longueur de la chaîne : " . $G4A->longueur($chaine);

echo B .LIMITEUR_QUESTION . B;
echo "Longueur d'un nombre :" . B;
// cas int
$nombre = 14568;
echo "Longueur du nombre : " . $G4A->longueur($nombre);
?>

