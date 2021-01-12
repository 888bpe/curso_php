<?php

//$conn = new mysqli("localhost", "root", "4dm*1nf0", "db_php7");

$conn = new PDO("mysql:dbname=db_php7;host=localhost", "root", "4dm*1nf0")

//Verifica se houve erro na conexão (caso seja new mysqli)
//if($conn->connect_error){

//    echo "Error: " . $conn->connect_error;

//}




?>