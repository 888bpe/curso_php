<?php

session_start();

echo session_id();

echo "<br>";
//Depois de verificar login e senha, reinicie o ID da Sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();


?>