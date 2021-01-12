<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);
$blue = imagecolorallocate($image, 0, 0, 255);

imagestring($image,                 //Imagem
            4,                      //Tamanho da fonte (1-5)
            60,                     //Deslocamento X
            120,                    //Deslocamento Y
            "Curso de PHP 7",       //Frase
            $red                    //Cor
);  

imagepng($image);

imagedestroy($image);

?>