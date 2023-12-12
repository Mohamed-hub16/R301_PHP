
<?php
/* MARCHE PAS
// 1. CHEMIN_DU_FICHIER: /g:/Mon Drive/A2/Exercices/PHP/jpp_git/index.php
// DÉBUT: abpxx6d04wxr
// Inclure le fichier contenant la définition de l'objet
include 'chemin/vers/autre/fichier.php';

// Créer une instance de l'objet
$obj = new ClassName();

// Accéder à la constante de la classe
$valeurConstante = ClassName::CONSTANT_NAME;

//2.
// Accéder à la variable de classe
$valeurVariable = $obj->classVariable;

// Appeler une méthode de l'objet
$obj->methodName();
*/
?>

<br>


<?php

// Defines an abstract class
abstract class AbstractClass {
    abstract public function abstractMethod();
}

// Defines an interface
interface MyInterface {
    public function interfaceMethod();
}

// Defines a class that inherits from an abstract class and implements an interface
class MyClass extends AbstractClass implements MyInterface {
    public function abstractMethod() {
        print("Text from the abstract method of the abstract class!\n");
    }

    public function interfaceMethod() {
        print("Text from the interface method\n");
    }
}

$obj = new MyClass();

$obj->abstractMethod();    // Calls the abstract method
$obj->interfaceMethod();   // Calls the interface method

// Function that sorts an array
/**
 * @param array $array array to be sorted
 *
 * @return array sorted array
 */
function sortArray(array $array){
    sort($array);
    return $array;
}

// Calling the sorting function
$sortedArray = sortArray([0, 2, 1, 0, 58, 7]);
print_r($sortedArray);
?>

<br>

<?php
/* MARCHE PAS
// on creer une classe qui represente une base de donnée :
class DatabaseHandler {
    private $dbHost;
    private $dbName;
    private $dbUsername;
    private $dbPassword;
    private $conn; //conn sera de type pdo, pour se connecter a la database

    // on fait une methode constructeur pour faire un connection a la bdd
    // (et on renvoie le msg d'erreur si cela n'a pas marché)
    public function __construct(String $host, String $hostname, String $username, String $password ) {
        $this->dbHost = $host;
        $this->dbName = $hostname;
        $this->dbUsername = $username;
        $this->dbPassword = $password;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->dbHost}; 
                dbname={$this->dbName}",
                $this->dbUsername,
                $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // on creer une methode pour creer une table (table d'exemple avec students)
    public function createTable() {
        $sql = "CREATE TABLE IF NOT EXISTS students (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(50) NOT NULL,
                    age INT
                )"; // on met la requete dans une chaine de caracteres

        try {
            $this->conn->exec($sql); // on execute la requete
            echo "Table created successfully<br>"; // si ça a marché
        } catch (PDOException $e) {
            die("Table creation failed: " . $e->getMessage()); // sinon
        }
    }

    // maintenant la methode pour insert des données
    public function insert() {

        $sql = "INSERT INTO students VALUES ('Tom', 19)"; // la requete dans une chaine de caracteres

    }

    // enfin, une methode pour select les données de la bdd
    public function select() {

        $sql = "SELECT * FROM students"; // la requete dans une chaine de caracteres

    }
}

$dbHandler = new DatabaseHandler("","","",""); // on creer un objet de la classe vu precedement
$dbHandler->createTable(); // puis on appelle les methodes dans l'ordre
$dbHandler->insert();
$data = $dbHandler->select();

echo "<pre>";
print_r($data);
echo "</pre>";

?>

//6
<?php
class ImageGenerator {
    public static function generateImage() {
        $image = imagecreatetruecolor(400,200);
        $blueBackground = imagecolorallocate($image,0,0,255);
        imagefill($image,0,0, $blueBackground);

        $redColor = imagecolorallocate($image,255,0,0);
        imagefilledellipse($image,200,100,150,150,$redColor);

        header('Content-Type: image/jpeg');
        imagejpeg($image);

    }
}
ImageGenerator::generateImage();
*/
?>

<br>

<?php


// Inclure le fichier classe.php
include 'classe.php';

// Instancier la classe MaClasse
$objet = new MaClasse();

// Appeler la méthode ecrireDansFichier avec un nom de fichier (par exemple, sortie.html)
$objet->ecrireDansFichier('sortie.html');
?>

<br>

<?php

/* Marche pas
// Inclure le fichier redirection.php
include 'redirection.php';

// Instancier la classe RedirectionClass
$objetRedirection = new RedirectionClass();

// Appeler la méthode d'effectuerRedirection
$objetRedirection->effectuerRedirection();
*/
?>

<br>

<?php

//9 class method that returns the type of an given, untyped parameter
class MyClassQ9 {
    public function getTypeOfTheParameter($parameter) {
        // Use gettype() function to get the type of the parameter
        $type = gettype($parameter);

        return $type;
    }
}

$obj = new MyClassQ9();


$typeParameter1 = $obj->getTypeOfTheParameter(42);
echo "Type of 42: $typeParameter1\n"; // Output: Type of $intValue: integer

$typeParameter2 = $obj->getTypeOfTheParameter("Hello, World!");
echo "Type of Hello, World! : $typeParameter2\n"; // Output: Type of $strValue: string
?>

<br>

<?php
/* MARCHE PAS
//10 class method that returns an array containing the name of the current host, server and client IP, and request method

class RequestInfo
{
    public static function getRequestInfo()
    {
        $info = array();

        // Get the host name
        $info['host'] = $_SERVER['HTTP_HOST'];

        // Get the server IP address
        $info['server_ip'] = $_SERVER['SERVER_ADDR'];

        // Get the client IP address
        $info['client_ip'] = $_SERVER['REMOTE_ADDR'];

        // Get the request method
        $info['request_method'] = $_SERVER['REQUEST_METHOD'];

        return $info;
    }
}

// Usage
$requestInfo = RequestInfo::getRequestInfo();

// Display the information
echo "Host: " . $requestInfo['host'] . "<br>";
echo "Server IP: " . $requestInfo['server_ip'] . "<br>";
echo "Client IP: " . $requestInfo['client_ip'] . "<br>";
echo "Request Method: " . $requestInfo['request_method'] . "<br>";

*/
?>

<br>

<?php

class TestClass {

    public function getTestValue() {
        if (isset($_GET['test'])) {
            return $_GET['test'];
        } else {
            return 'DefaultTestValue';
        }
    }
}

$testObject = new TestClass();

$testValue = $testObject->getTestValue();

echo "The value of 'test' parameter is: $testValue";
?>

<br>

<?php
class MemoryUsage {

    public function getMemoryUsage() {
        $currentMemory = memory_get_usage(true);

        $maxMemory = $this->convertToBytes(ini_get('memory_limit'));

        return [
            'current_memory' => $this->formatBytes($currentMemory),
            'max_memory' => $this->formatBytes($maxMemory),
        ];
    }

    private function convertToBytes($value) {
        $unit = strtoupper(substr($value, -1));
        $value = (int)$value;
        switch ($unit) {
            case 'G':
                $value = 1024;
            case 'M':
                $value= 1024;
            case 'K':
                $value = 1024;
        }
        return $value;
    }

    private function formatBytes($bytes, $precision = 2) {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}

$memoryUsageObject = new MemoryUsage();

$memoryUsage = $memoryUsageObject->getMemoryUsage();

echo "Current Memory Usage: {$memoryUsage['current_memory']}\n";
echo "Maximum Memory Allowed: {$memoryUsage['max_memory']}\n";
?>

<br>

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
}

echo LetterChecker::checkLetter("A");

?>

//14
<?php
class iterationNombre {
    public static function afficheIteration($limite) {
        $nombre = 1;
        while (true) {
            echo $nombre . "<br>";
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

echo iterationNombre::afficheIteration(10);

?>


//15
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
echo NumberChecker::verifierNombresImpairs([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
?>

