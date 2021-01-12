<?php
##################
##### UNLINK #####
##################
/*
$file = fopen("teste.txt", "a+");

fclose($file);

unlink("teste.txt");

echo "Arquivo removido com sucesso!";
*/



###########################################
##### APAGAR ARQUIVOS DENTRO DA PASTA #####
###########################################

if (!is_dir("images")){
    mkdir("images");
}

foreach (scandir("images") as $item){

    if(!in_array($item, array(".", ".."))){

        unlink("images/" . $item);

    }

}

echo "Os arquivos da pasta images foram apagados!";


?>