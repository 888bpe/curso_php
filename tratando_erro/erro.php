<?php

$nome = $_GET['nome'];

echo "<br>" . 'Usando o comando ' . "<b>" . 'error_reporting(E_ALL & ~E_NOTICE) ' . "</b>" . ', nenhum erro irá aparecer para o usuário';

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET['nome'];

?>