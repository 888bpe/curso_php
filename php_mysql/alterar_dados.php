<?php

require_once("connect.php");
echo "<strong>" . 'ALTER NO BANCO DE DADOS' . "</strong><br/><br/>";

#############################################################
############# ALTERAR DADOS NO BANCO DE DADOS ##############
#############################################################

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Matheus Pimentel";
$password = "asd322ggS1314";
$id = 2;

//Espera como primeiro parâmetro, os tipos das interrogações ->  s:string d:double i:int b:bool
//Espera como segundo parâmetro, os dados
$stmt->bindParam(":LOGIN", $login);        //Ligue este parâmetro com este dado
$stmt->bindParam(":PASSWORD", $password);  //Ligue este parâmetro com este dado
$stmt->bindParam(":ID", $id);  //Ligue este parâmetro com este dado

$stmt->execute();

echo "Alterado!";

?>