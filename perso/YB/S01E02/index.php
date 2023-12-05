<?php

//7)
// Inclure le fichier classe.php
include 'classe.php';

// Instancier la classe MaClasse
$objet = new MaClasse();

// Appeler la méthode ecrireDansFichier avec un nom de fichier (par exemple, sortie.html)
$objet->ecrireDansFichier('sortie.html');


// 8) 
// Inclure le fichier redirection.php
include 'redirection.php';

// Instancier la classe RedirectionClass
$objetRedirection = new RedirectionClass();

// Appeler la méthode d'effectuerRedirection
$objetRedirection->effectuerRedirection();

?>