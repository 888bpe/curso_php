<form>
    <input type="text" placeholder="Nome" name="nome">
    <input type="date" name="nasc">
    <input type="submit" value="OK">
</form>

<?php
foreach ($_GET as $key => $value){

    echo "Nome do campo: " . $key . "<br>";

    echo "Valor do campo: " . $value . "<br>";

    echo "<br>";

}

?>