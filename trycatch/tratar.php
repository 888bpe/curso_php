<?php

function TrataNome($name){

    if (!$name){

        throw new Exception("Nenhum nome foi informado!", 1);

    }

    echo ucfirst($name) . "<br>";

}


try{

    trataNome("Matheus");
    trataNome("");

} catch(Exception $e){

    echo $e->getMessage();

} finally {

    echo "<br><br>Executou o Try!";

}

?>