<?php

header("Content-Type: image/jpeg");

$image = imagecreatefromjpeg("images/certificado.jpg");
$fontBevan = "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";
$fontPlayball = "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf";

$title = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 30, 30, 30);
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);
$blue = imagecolorallocate($image, 0, 0, 255);

// Imagem, Tamanho da Fonte, , Ângulo Deslocamento X, Deslocamento Y, Cor, Fonte, Frase
imagettftext($image, 32, 0, 320, 150, $title, $fontBevan, "CERTIFICADO");  
imagettftext($image, 32, 0, 440, 450, $title, $fontPlayball, "Matheus Batista Pimentel");  
imagestring($image, 3, 450, 470, utf8_decode("Concluído em: " . date("d/m/Y")), $red);  

imagejpeg($image);
//imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg");

imagedestroy($image);

?>