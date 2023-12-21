<?php /*Crée un tableau aléatoire de 1 000 éléments et le trie par clé décroissante, puis par valeur décroissante.*/


define('LIMITEUR_QUESTION', '**************************************************');
define('B', "<br>");

echo LIMITEUR_QUESTION . B;
echo "Question 2 : créez un tableau de 1000 éléments aléatoire et triez les valeurs par clé décroissantes puis par valeur décroissante :" . B;
echo LIMITEUR_QUESTION . B;


echo "Tableau trié par clé décroissante :" . B;
echo LIMITEUR_QUESTION . B;

$tab = array();
for ($i = 0; $i < 1000; $i++) {/*boucle pour rentrer des valeurs aléatoire*/
    $tab[$i] = rand(0, 1000);
}
krsort($tab);/*trie par clé décroissante via krsort*/


foreach ($tab as $key => $value) {
    echo "Clé : $key, Valeur : $value <br>";
}

echo LIMITEUR_QUESTION . B;
echo "Tableau trié par valeur décroissante :" . B;
echo LIMITEUR_QUESTION . B;

arsort($tab);/*trie par valeur décroissante via arsort*/

foreach ($tab as $key => $value) {
    echo "Clé : $key, Valeur : $value <br>";
}

?>