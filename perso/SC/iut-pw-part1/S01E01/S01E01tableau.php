<?php /*Crée un tableau aléatoire de 1 000 éléments et le trie par clé décroissante, puis par valeur décroissante.*/
$tab = array();
for ($i = 0; $i < 1000; $i++) {/*boucle pour rentrer des valeurs aléatoire*/
    $tab[$i] = rand(0, 1000);
}
krsort($tab);/*trie par clé décroissante via krsort*/

echo "Tableau trié par clé décroissante : <br>";
foreach ($tab as $key => $value) {
    echo "Clé : $key, Valeur : $value <br>";
}

arsort($tab);/*trie par valeur décroissante via arsort*/
echo "<\n><br> Tableau trié par valeur décroissante : <br>";
foreach ($tab as $key => $value) {
    echo "Clé : $key, Valeur : $value <br>";
}

?>