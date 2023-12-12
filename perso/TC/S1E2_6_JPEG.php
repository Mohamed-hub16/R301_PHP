<?php
    class ImageGenerator {
        public static function generateImage() {
            $image = imagecreatetruecolor(400,200);
            $blueBackground = imagecolorallocate($image,0,0,255);
            imagefill($image,0,0, $blueBackground);

            $redColor = imagecolorallocate($image,255,0,0);
            imagefilledellipse($image,200,100,150,150,$redColor);

            header('Content-Type: image/jpeg');
            imagejpeg($image);
            
        }
    }
    ImageGenerator::generateImage();
?>