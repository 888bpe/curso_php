<?php

//É importante usar os números (400, por exemplo) e filtrar da seguinte forma, por exemplo:
    //400 - 1000 = Erros do usuário
    //50000 - 100000 = Erros do sistema
    //10 - 100 = Erros de infraestrutura

//Tente isso, se der erro, faça isso
try {

    throw new Exception("Houve um erro.", 400);

} catch (Exception $e){     //Joga todo o erro dentro da variável $e

    echo json_encode(array(
       "message"=>$e->getMessage(),
       "line"=>$e->getLine(),
       "file"=>$e->getFile(),
       "code"=>$e->getCode() 
    ));

}

//echo "<br><br><a href='tratar.php' target='_blank'>Tratar Try</a>";

?>