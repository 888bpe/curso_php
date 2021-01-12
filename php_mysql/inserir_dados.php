<?php

require_once("connect.php");
echo "<strong>" . 'INSERT NO BANCO DE DADOS' . "</strong><br/><br/>";

#############################################################
################# INSERT NO BANCO DE DADOS ##################
#############################################################


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Matheus";
$password = "321314";

//Espera como primeiro parâmetro, os tipos das interrogações ->  s:string d:double i:int b:bool
//Espera como segundo parâmetro, os dados
$stmt->bindParam(":LOGIN", $login);        //Ligue este parâmetro com este dado
$stmt->bindParam(":PASSWORD", $password);  //Ligue este parâmetro com este dado

$stmt->execute();

echo "Inserido!";

?>