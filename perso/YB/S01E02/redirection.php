<?php

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

?>