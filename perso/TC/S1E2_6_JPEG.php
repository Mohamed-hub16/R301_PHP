<?php
class ImageGenerator { // creation de la classe
    public static function generateImage() { // creation de la methode
        header('Content-Type: image/jpeg'); // on met l'image dans un header ou on dit le type de l'image

        $image = imagecreatetruecolor(400,200); // on creer une image de 400 par 200
        $blueBackground = imagecolorallocate($image,0,0 ,255); // on creer une couleur
        // avec une image, puis les code pour une couleur, dans ce cas le bleu

        imagefill($image,0,0, $blueBackground); // on rempli l'image avec une couleur tel que :
        // l'image de base, la position x, y puis la couleur

        $redColor = imagecolorallocate($image,255,0,0); // on creer une couleur (rouge)
        imagefilledellipse($image,200,100,150,150,$redColor); // on creer une elipse rempli d'une couleur tel que :
        // l'image a laquelle on l'ajoute, la position x, y puis la largeur ensuite la hauteur pour finir sur la couleur

        $textColor = imagecolorallocate($image,255,255,255); // on recreer une couleur (blanche) pour le texte
        imagestring($image, 3, 50, 150, 'I AM TC AND I LOVE PHP', $textColor); // on ajoute le texte avec 
        // d'abord, l'image puis la taille de la police (de 1 a 5) puis les coordonnées x, y, le message et la couleur

        imagejpeg($image); // sauvegarde de l'image

        // Sauvegarde l'image sur le disque
        $pathToSave = 'image.jpg'; // le chemin de l'image
        imagejpeg($image, $pathToSave); // ajout du chemin en argument de la methode (aussi simple que ça)
    }
}
    ImageGenerator::generateImage(); // appel de la methode
?>
