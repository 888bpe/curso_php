<?php

require_once("connect.php");
echo "<strong>" . 'DELETE NO BANCO DE DADOS' . "</strong><br/><br/>";

//Para utilizar as funções rollback e commit
$conn->beginTransaction();

#############################################################
############# DELETAR DADOS NO BANCO DE DADOS ##############
#############################################################

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

echo "ID $id Excluído! <br/>";

//Para cancelar a ação
//$conn->rollback();
//echo "O ID $id não foi alterado <br/>";

$conn->commit();
echo "O ID $id foi apagado com sucesso! <br/>";


?>