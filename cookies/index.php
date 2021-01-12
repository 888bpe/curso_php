<?php
//São recursos que armazenam pequenos dados temporariamente na máquina do usuário

$data = array(
    "Empresa"=>"8º BPE",
    "Seção"=>"Informática"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);    //nome do cookie, dados armazenados, tempo de validade

echo "Cookie criado!";
echo " <br/> <br/> <a href='recupera_cookie.php' target='_blank'>Recuperar Cookie</a>"

?>