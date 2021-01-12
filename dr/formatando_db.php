<?php

require_once("config.php");

############################
##### Converter em CSV #####
############################

$sql = new Sql();

$result = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");


//Fazendo o cabeçalho da ARRAY, pegando os títulos das colunas da tabela do banco de dados
$headers = array();

foreach ($result[0] as $key => $values){

    array_push($headers, ucfirst($key));

}//fecha foreach de cabeçalhos

$file = fopen("usuarios.csv", "a+");

fwrite($file, implode("\t\t", $headers) . "\r\n\r\n");

//Fazendo o restante dos campos
foreach ($result as $row){

    $data = array();

    foreach ($row as $key => $value){

        array_push($data, $value);

    }//fecha foreach de colunas

    fwrite($file, implode("\t\t", $data) . "\r\n");
    
}//fecha foreach de linhas

fwrite($file, "\r\n\r\n");

fclose($file);

echo "Arquivo usuarios.csv criado com sucesso!";

//echo implode(", ", $headers);   // implode só pode ser usada com array

?>