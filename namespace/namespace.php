<?php

require_once("config.php");

use Cliente\Cadastro;

$cadastro = new Cadastro();

$cadastro->setNome("Matheus Pimentel");
$cadastro->setEmail("matheusbpimentel@outlook.com");
$cadastro->setSenha("123456");

//echo $cadastro;

$cadastro->registrarVenda();


?>