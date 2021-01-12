<?php

$conn = mysqli_connect("localhost", "root", "4dm*1nf0", "db_php7");


//Maneira incorreta de receber os dados
//$id = (isset($_GET["id"]))?$_GET["id"]:1;

//$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";


//Maneira correta de receber os dados
$id = (isset($_GET["id"]))?$_GET["id"]:1;

if(!is_numeric($id) || strlen($id) > 5){
    exit ("ID inválido!");
}

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = '$id'";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){

    echo $resultado->deslogin . "<br>";

}

?>