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

?>