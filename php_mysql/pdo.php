<?php

require_once("connect.php");
echo "<strong>" . 'SELECT DO BANCO DE DADOS' . "</strong><br/><br/>";

#############################################################
############# SELECT DO DADO NO BANCO DE DADOS ##############
#############################################################

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key => $value){

        echo "<strong>  $key </strong> $value <br/>";

    }

    echo "===============================================<br/>";

}

//echo json_encode($results);

?>