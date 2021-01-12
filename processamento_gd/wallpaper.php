<?php

header("Content-Type: image/jpeg");

$file = "images/wallpaper.jpg";

$new_width = 720;
$new_height = $new_width*0.5625;

$data = getimagesize($file);    //Pega o tamanho da imagem

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height); //Paleta com 16 milhões de cores
$old_image = imagecreatefromjpeg($file);

imagecopyresampled(
    $new_image,              //Nova imagem
    $old_image,              //Imagem de origem
    0,                       //Corte na X na imagem destino
    0,                       //Corte na Y na imagem destino
    0,                       //Corte na X na imagem origem
    0,                       //Corte na Y na imagem origem
    $new_width,               //Largura da imagem de destino
    $new_height,              //Altura da imagem de destino
    $old_width,               //Largura da imagem de origem
    $old_height              //Altura da imagem de origem
);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>