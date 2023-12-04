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


?>