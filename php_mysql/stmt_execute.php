<?php

require_once("connect.php");

#############################################################
############ INSERINDO UM DADO NO BANCO DE DADOS ############
#############################################################

//Preparar um comando que quero enviar para o banco de dados
//Escrevo dentro das aspas o comando SQL que quero que execute
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ? )");

//Espera como primeiro parâmetro, os tipos das interrogações ->  s:string d:double i:int b:bool
//Espera como segundo parâmetro, os dados
$stmt->bind_param("ss", $login, $pass);

$login = "rooesa";
$pass = "123sd2";

$stmt->execute();

if($stmt){

    echo "Dados inseridos com sucesso. <br/>";
    echo "Login: $login </br>";
    echo "Senha: $pass </br>";

}

?>