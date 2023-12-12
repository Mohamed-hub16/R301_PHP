<?php
    function trier_tableau_par_cle_decroissante ($tableau){ 
        krsort($tableau); //trie le tableau par clé décroissante
        return $tableau;
    }

    function element_present_dans_tab1_et_pas_dans_tab2($tab1, $tab2){
        $tableauElementsPasEnCommun = array(); //création du tableau
        foreach ($tab1 as $key => $value) { //pour chaque élément de tab1
            if (!in_array($value, $tab2)){ //si l'élément de tab1 n'est pas dans tab2
                array_push($value, $tableauElementsPasEnCommun
            ); // ajoute l'élément au tableau
            }
        return $tableauElementsPasEnCommun
    ;
    }
    }
    function transforme_texte_en_format_titre ($element){
        
        if (is_string($element) && strlen($element)>2){ // vérifie que l'élement du tableau est une chaîne de caractère et non un caractere simple
            $element = strtolower($element); //met tous les caractères en minuscules
            $element = ucwords($element); //met la première lettre de chaque mot en majuscule
        }
        return $element;

    }

    function tableau_element_to_title_case ($tableau){
        return array_map('transforme_texte_en_format_titre', $tableau); // applique la fonction "transforme_texte_en_format_titre" à chaque élément du tableau
    }

?>
   
   

