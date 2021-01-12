<?php

// CRIPTOGRAFIA DE SENHA = md5($senha);

// NÃO É CRIPTOGRAFIA DE SENHA
define('SECRET_IV', pack('a16', 'senha'));      //Senha é a Chave
define('SECRET', pack('a16', 'senha'));         //Senha é a Chave

$data = ["nome"=>"Hcode"];                      //Hcode é o dado que será criptografado

//Criptografar
$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

var_dump(base64_encode($openssl));

echo "<br>";

//Descriptografar
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump($string);

?>