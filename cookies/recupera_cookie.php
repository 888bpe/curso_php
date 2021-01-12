<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])){

    $data  = json_decode($_COOKIE["NOME_DO_COOKIE"], true);

    print_r($data);
    //print_r($data['Empresa']);

}

echo " <br/> <br/> <a href='index.php' target='_blank'>Voltar</a>"

?>