<?php

$diretorio = "diretorio";
$permissao = "0775";

if(!is_dir($diretorio)){
    
    mkdir($diretorio);

}

echo "0 = Não existe permissão nenhuma <br>";
echo "1 = Somente Execução <br>";
echo "2 = Somente Gravação <br>";
echo "3 = Executar e Gravar <br>";
echo "4 = Somente Leitura <br>";
echo "5 = Leitura e Execução <br>";
echo "6 = Leitura e Gravação <br>";
echo "7 = Leitura, Execução e Gravação <br><br>";

echo "0 7 7 7 <br>";
echo "0 -- <br>";
echo "1 -- Quem criou (proprietário) <br>";
echo "2 -- Grupos <br>";
echo "3 -- Outros (convidados) <br>";

?>