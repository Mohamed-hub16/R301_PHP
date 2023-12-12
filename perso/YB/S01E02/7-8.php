<?php

class MaClasse {
    public function ecrireDansFichier($nomFichier) {
        $url = "http://www.google.com";
        $contenu = file_get_contents($url);

        if ($contenu !== false) {
            file_put_contents($nomFichier, $contenu);
            echo "Contenu écrit dans $nomFichier avec succès.";
        } else {
            echo "Échec de la récupération du contenu depuis $url.";
        }
    }
}

class RedirectionClass {
    public function effectuerRedirection() {
        // URL du script de redirection
        $urlRedirection = 'script_de_redirection.php';

        // Envoi des en-têtes HTTP pour la redirection
        header("Location: $urlRedirection", true, 302);

        // Affichage d'un message avec un lien vers le script de redirection
        echo "Redirection en cours. Cliquez <a href='$urlRedirection'>ici</a> si la redirection ne fonctionne pas.";
        exit(); // Assurez-vous de quitter le script après l'envoi des en-têtes de redirection
    }
}

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