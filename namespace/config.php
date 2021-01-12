<?php

//Criando um autoload
spl_autoload_register(function($nameClass){

    //var_dump($nameClass);

    //Pasta diretório de classes
    $dirClass = "class";
    //$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

    if(file_exists($filename)){

        require_once($filename);

    }

});




?>