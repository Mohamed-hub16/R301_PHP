<?php

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