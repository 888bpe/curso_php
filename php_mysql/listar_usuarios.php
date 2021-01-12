<?php

require_once("connect.php");

#############################################################
############# SELECT DO DADO NO BANCO DE DADOS ##############
#############################################################

$results = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//Para exibir no arquivo json
$data = array();

// Retorna um dado se existir e o armazena na $row
while($row = $results->fetch_array()){
    
    //Para exibir no arquivo json
    array_push($data, $row);
    //var_dump($row);

}

//Para exibir no arquivo json
echo json_encode($data);

/*
while($row = $result->fetch_assoc()){
    
        var_dump($row);
    
}
*/


?>