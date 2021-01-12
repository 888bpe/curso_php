<?php

require_once("connect.php");
echo "<strong>" . 'DELETE NO BANCO DE DADOS' . "</strong><br/><br/>";

#############################################################
############# DELETAR DADOS NO BANCO DE DADOS ##############
#############################################################

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

//Espera como primeiro parâmetro, os tipos das interrogações ->  s:string d:double i:int b:bool
//Espera como segundo parâmetro, os dados
$stmt->bindParam(":ID", $id);  //Ligue este parâmetro com este dado

$stmt->execute();

echo "ID $id Excluído!";

?>