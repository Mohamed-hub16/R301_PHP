
<?php
//Je met le 6 parce que je préfère.
define('LIMITEUR_QUESTION', '**************************************************'); // Pour la lisibilité des questions réponses
define('B', "<br>"); //Pour saut de ligne car flemme de réecrire à chaque fois.
/*----------------------6----------------------------------*/
//Méthode de classe qui crée une image JPEG représentant un cercle rouge avec le texte "JE SUIS [vos initiales] & J'AIME PHP" sur un fobnd bleu, puis la sauvegarde sur le disque.
class ImageCreator {

    // Méthode statique pour créer une image
    public static function createImage($initials) {
        // Création d'une image avec un fond bleu
        $image = imagecreate(400, 300);
        $background_color = imagecolorallocate($image, 0, 0, 255); // Couleur bleue pour le fond

        // Définition de la couleur rouge
        $red = imagecolorallocate($image, 255, 0, 0);

        // Dessin d'un cercle rouge
        imagefilledellipse($image, 200, 150, 200, 200, $red);

        // Ajout du texte avec les initiales
        $text_color = imagecolorallocate($image, 255, 255, 255); // Couleur blanche pour le texte
        $text = "JE SUIS $initials & J'AIME PHP";

        // Ajout du texte à l'image
        imagestring($image, 5, 50, 120, $text, $text_color);

        // Sauvegarde de l'image sur le disque
        imagejpeg($image, 'output.jpg');

        // Retourne le chemin de l'image sauvegardée
        return 'output.jpg';
    }
}

// Utilisation de la méthode avec des initiales spécifiques
$imagePath = ImageCreator::createImage("MM");
echo LIMITEUR_QUESTION . B . "Question 6 : " . B;
// Affiche l'image dans le navigateur
echo '<img src="' . $imagePath . '" alt="Image créée" />' . B . LIMITEUR_QUESTION;
echo  B.B;
/*--------------1--------------------------------------------------------*/

// Inclure le fichier contenant la définition de la classe
include 'object.php';
// Instancier la classe
$exempleObjet = new ExempleClasse("Je suis une variable de classe !");
// Accéder à la constante de classe
echo LIMITEUR_QUESTION. B . "Question 1:" . B .  ExempleClasse::CONSTANTE_EXEMPLE . B;
// Accéder à la variable de classe
echo "Variable de classe : " . $exempleObjet->variableExemple . B . LIMITEUR_QUESTION;
echo  B.B;
/*-----------------2---------------------------------------------------------*/

// Appeler une méthode qui utilise à la fois la constante et la variable
echo LIMITEUR_QUESTION . B . "Question 2 : " .B;
$exempleObjet->afficherInfo();
echo B . LIMITEUR_QUESTION;
echo  B.B;
/*----------------------------------3----------------------------------------*/

//Héritage d'une autre classe, classe abstraite et implémentation d'une interface.


// Déclaration d'une classe abstraite nommée AbstractClass
abstract class AbstractClass {
    // Déclaration d'une méthode abstraite dans la classe abstraite
    abstract public function abstractMethod();
}

// Déclaration d'une interface nommée MyInterface
interface MyInterface {
    // Déclaration d'une méthode dans l'interface
    public function interfaceMethod();
}

// Déclaration d'une classe nommée MyClass qui étend la classe abstraite AbstractClass
// et implémente l'interface MyInterface
class MyClass extends AbstractClass implements MyInterface {

    // Implémentation de la méthode abstraite de la classe abstraite
    public function abstractMethod() {
        print("Texte de la méthode abstraite de la classe abstraite !\n");
    }

    // Implémentation de la méthode de l'interface
    public function interfaceMethod() {
        print("Texte de la méthode de l'interface\n");
    }
}

// Instanciation d'un objet de la classe MyClass
$obj = new MyClass();

// Appel de la méthode abstraite implémentée dans la classe MyClass
echo LIMITEUR_QUESTION . B . "Question 3 : " . B;
$obj->abstractMethod();
echo B;
// Appel de la méthode de l'interface implémentée dans la classe MyClass
$obj->interfaceMethod();
echo B . LIMITEUR_QUESTION;
echo  B.B;

/*------------------------------------4-------------------------------------------------*/
//Méthode de classe qui trie une table comme S01E01 avec une signature complète (types, types de retour, PHPDoc, etc.).
/**
 * Trie un tableau.
 *
 * @param array $array tableau à trier
 *
 * @return array tableau trié
 */
function sortArray(array $array){
    // Utilise la fonction sort() pour trier le tableau.
    sort($array);

    // Retourne le tableau trié.
    return $array;
}

// Appel de la fonction de tri
$sortedArray = sortArray([0, 2, 1, 0, 58, 7]);

echo LIMITEUR_QUESTION . B . "Question 4 : " .B;
// Affiche le tableau trié.
print_r($sortedArray);
echo B. LIMITEUR_QUESTION;
echo  B.B;


/*-----------------------------------------5--------------------------------------------------------------*/
//Méthode de classe qui se connecte à votre base de données en utilisant PDO (utilise MySQL), crée une table, y insère des données, puis les lit et les renvoie.
echo LIMITEUR_QUESTION . B . "Question 5 : " .B;
try {
    $bdd = new PDO('mysql:host=localhost;dbname=php', 'sa', 'sa1@');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la table users
    $bdd->exec('
        CREATE TABLE IF NOT EXISTS `solid_users` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL,
            PRIMARY KEY (`id`)
        )
    ');

    // Insertion de données dans la table users
    $bdd->exec('
        INSERT INTO `solid_users` (`name`, `email`) VALUES
        ("John2 Doe", "john2.doe@example.com")
    ');

    // Récupération des valeurs dans la table users
    $resultats = $bdd->query('SELECT * FROM solid_users');
    echo "Valeurs dans la table users : \n";
    while ($row = $resultats->fetch(PDO::FETCH_ASSOC)) {
        echo $row['name'] . " - " . $row['email'] . "\n";
    }

} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

/*-----------------------------------------7----------------------------------------*/
//Méthode de classe qui écrit le contenu de www.google.com dans un fichier.

// Inclure le fichier classe.php
include 'classe.php';

// Instancier la classe MaClasse
$objet = new MaClasse();

// Appeler la méthode ecrireDansFichier avec un nom de fichier (par exemple, sortie.html)
echo LIMITEUR_QUESTION . B . "Question 7 : " .B;
$objet->ecrireDansFichier('sortie.html');
echo B . LIMITEUR_QUESTION;
echo B . B;
/*------------------------------------------8------------------------------------------------------*/
//Méthode de classe qui génère les en-têtes HTTP pour rediriger (HTTP 302) vers un autre script (ajoutez un lien vers votre script).

// Classe RedirectHelper
class RedirectHelper {

    // Méthode pour effectuer une redirection vers une URL donnée
    public function redirect($url) {
        // En-tête HTTP pour la redirection (HTTP 302)
        header("Location: $url", true, 302);
        // Arrête l'exécution du script après la redirection
        exit;
    }
}

// Instanciation de la classe RedirectHelper
$redirectHelper = new RedirectHelper();

// Appel de la méthode redirect avec l'URL de destination "redirection.php"
//$redirectHelper->redirect("redirection.php");


/*--------------------------------------------------9---------------------------------------------*/
//Méthode de classe qui renvoie le type d'un paramètre donné, non typé.
class MyClassQ9 {
    // Méthode pour obtenir le type du paramètre
    public function getTypeOfTheParameter($parameter) {
        // Utilisez la fonction gettype() pour obtenir le type du paramètre
        $type = gettype($parameter);

        return $type;
    }
}

$obj = new MyClassQ9();

// Appel de la méthode pour le paramètre entier (integer)
$typeParameter1 = $obj->getTypeOfTheParameter(42);
echo LIMITEUR_QUESTION . B . "Question 9 : " . B . "Type de 42 : $typeParameter1" . B; // Sortie : Type de $intValue : integer

// Appel de la méthode pour le paramètre chaîne de caractères (string)
$typeParameter2 = $obj->getTypeOfTheParameter("Hello, World!");

echo "Type de Hello, World! : $typeParameter2" . B . LIMITEUR_QUESTION; // Sortie : Type de $strValue : string
echo B .B;
/*--------------------------------------------10------------------------------------------------*/

//Méthode de classe qui renvoie un tableau contenant le nom de l'hôte actuel, le serveur et l'adresse IP du client, ainsi que la méthode de requête.

class InfoUtilisateur {

    // Méthode statique qui retourne un tableau d'informations utilisateur
    public static function getInfoUtilisateur() {
        return array(
            'hote' => gethostname(), // Obtient le nom de l'hôte local
            'ip_serveur' => self::getServerIP(), // Obtient l'adresse IP du serveur en utilisant le nom d'hôte
            'ip_client' => $_SERVER['REMOTE_ADDR'] ?? '', // Obtient l'adresse IP du client ou une chaîne vide si non définie
            'methode_requete' => $_SERVER['REQUEST_METHOD'] ?? '' // Obtient la méthode de la requête HTTP ou une chaîne vide si non définie
        );
    }

    // Méthode privée qui obtient l'adresse IP du serveur en utilisant le nom d'hôte
    private static function getServerIP() {
        return gethostbyname($_SERVER['SERVER_NAME']);
    }
}

// Exemple d'utilisation
$infoUtilisateur = InfoUtilisateur::getInfoUtilisateur();
echo LIMITEUR_QUESTION . B . "Question 10 : " .B;
print_r($infoUtilisateur);
echo B . LIMITEUR_QUESTION .B .B;

/*----------------------------------------11----------------------------------------------------*/

//Méthode de classe qui renvoie la valeur actuellement transmise via une requête HTTP GET nommée "test".

// Définition d'une classe TestClass
class TestClass
{

    // Méthode pour obtenir la valeur du paramètre 'test' de la requête GET
    public function getTestValue()
    {
        // Vérifie si la clé 'test' existe dans les paramètres de requête GET
        if (isset($_GET['test'])) {
            // Si 'test' est défini, retourne sa valeur
            return $_GET['test'];
        } else {
            // Si 'test' n'est pas défini, retourne une valeur par défaut 'DefaultTestValue'
            return 'DefautTestValue';
        }
    }
}

// Instanciation de la classe TestClass
$testObject = new TestClass();

// Appel de la méthode pour obtenir la valeur du paramètre 'test'
$testValue = $testObject->getTestValue();

// Affichage de la valeur du paramètre 'test'
echo LIMITEUR_QUESTION . B . "Question 11 : " . B . "The value of 'test' parameter is: $testValue" . B . LIMITEUR_QUESTION .B .B;


/*-------------------------------------------------12---------------------------------------------------------------------------*/
// Méthode de classe qui renvoie la RAM actuellement utilisée et la RAM maximale que votre script peut utiliser (maximum PHP, pas celui actuel).

class MemoryUsage {
    // Méthode statique qui récupère l'utilisation actuelle de la mémoire et la limite maximale de mémoire autorisée par PHP.
    public static function getMemoryUsage() {
        // Obtient la quantité de mémoire actuellement utilisée (en octets).
        $memoryUsed = memory_get_usage(true);

        // Obtient la limite maximale de mémoire autorisée pour le script PHP.
        $memoryMax = ini_get('memory_limit');

        // Retourne un tableau associatif contenant les informations sur l'utilisation de la mémoire.
        return [
            'memory_used' => $memoryUsed,
            'memory_max' => $memoryMax
        ];
    }
}

// Utilisation de la méthode pour obtenir les informations sur l'utilisation de la mémoire.
$memoryInfo = MemoryUsage::getMemoryUsage();

// Affiche la quantité de mémoire actuellement utilisée en octets.
echo LIMITEUR_QUESTION . B . "Question 12 : " .B . "Memory Used: " . $memoryInfo['memory_used'] . " bytes" .B;


// Affiche la limite maximale de mémoire autorisée pour le script PHP.
echo "Memory Max: " . $memoryInfo['memory_max'] . B . LIMITEUR_QUESTION .B . B;


/*-------------------------------------------------------13-------------------------------------------------*/
//Méthode de classe qui utilise une structure switch(), suivie d'une structure match(), pour déterminer si un paramètre de lettre d'entrée est une voyelle ou une consonne.

class LetterChecker {
    public static function checkLetter($lettre) {

        switch (strtolower($lettre)) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                $isVoyelle = true;
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
}

echo LIMITEUR_QUESTION . B . "Question 13 : " . B . LetterChecker::checkLetter("A") .B . LIMITEUR_QUESTION .B.B;

/*------------------------------------------14------------------------------------------------------------------------------------------*/
//Méthode de classe qui utilise une structure while() interrompue par un mot-clé break une fois qu'elle atteint un certain paramètre entier d'entrée après avoir affiché tous les nombres bouclés précédemment.

class iterationNombre {
    public static function afficheIteration($limite) {
        $nombre = 1;
        while (true) {
            echo $nombre . "\n";
            if ($nombre == $limite) {
                break;
            }
            $nombre++;
        }
    }
}
/*  La fonction prend un nombre en paramètres qui correspond à la limite d'affichage
    Du coup, dans une boucle while on affiche un nombre qui va de 1 a la limite
    Ca s'arrête d'afficher quand le nombre arrive à la limite
*/
echo LIMITEUR_QUESTION . B . "Question 14 : " .B;
iterationNombre::afficheIteration(10);
echo B . LIMITEUR_QUESTION .B.B;


/*----------------------------------------------------------15---------------------------------------------------------------------------------------*/
//Méthode de classe qui utilise une construction do() employant le mot-clé continue pour imprimer les valeurs numériques d'un tableau donné qui sont impaires.


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
echo LIMITEUR_QUESTION . B . "Question 15 : " .B;
NumberChecker::verifierNombresImpairs([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
echo B . LIMITEUR_QUESTION .B.B;




