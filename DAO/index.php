<?php

require_once("config.php");

$pularLinha = new Usuario(); 


/*
#####################################################################
###### Para exibir um select dos dados utilizando a classe Sql ######
#####################################################################

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); 
*/



#####################################################################
###### Para exibir um select dos dados utilizando a classe Sql ######
#####################################################################

//loadById busca apenas 01 usuário
//$loadById = new Usuario();

//$loadById->loadById(4);

//echo $loadById;


##############################################################################
###### Para exibir um select de vários usuários utilizando a classe Sql ######
##############################################################################

//loadList trás uma lista de usuários
//$loadList = Usuario::getList();

//echo json_encode($loadList);


################################################################
###### Para exibir um select que contenha 'at' no usuário ######
################################################################

//$search = Usuario::search("at");

//echo json_encode($search);


##################################################
###### Buscando um usuário com autenticação ######
##################################################

//$usuario = new Usuario();
//$usuario->login("user", "123456");

//echo $usuario;


###############################
###### Insert de usuário ######
###############################

$insert = new Usuario();

$insert->insert("sdaaaa", "sdaaaa");

if ($insert) {echo "Foi!!!";}

###############################
###### Update de usuário ######
################################

//$update = new Usuario();

//$update->loadById(1);



//$update->update("professor", "dsaasd");


###############################
###### Delete de usuário ######
################################

//$delete = new Usuario();

//$delete->loadById(6);

//$delete->delete();
?>