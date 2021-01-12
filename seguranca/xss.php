<?php

if (isset($_POST['busca'])) {

    $busca = strip_tags($_POST['busca']);       //strip_tags retira qualquer comando daquele post
    echo $busca;                                //Ex: <b> Olá </b>  ->  Olá

}

?>

<form method="POST">

    <input type="text" name="busca" />
    <input type="submit" value="Enviar" />

</form