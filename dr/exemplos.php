<?php

$name = "images";

############################################
##### Verificar se um diretório existe #####
############################################
/*
$name = "images";

//Se o diretório não existe
if(!is_dir($name)){

    mkdir($name);
    //chmod($name, 0775); // Permite apagar com mais facilidade
    echo "Diretório $name criado com sucesso!";

}else{

    rmdir($name);
    echo "Diretório $name já existe!";

}
*/



#######################################
##### Scanear um diretório existe #####
#######################################
/*
$images = scandir($name);

$data = array();

foreach ($images as $img){

    if(!in_array($img, array(".", ".."))){   //Se não existir " . "  e " .. " da pesquisa do diretório

        $filename = $name . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);    // Para obter informaçoes dos arquivos
        //var_dump($info);

        $info["size"]= filesize($filename) . " BITs";    //Pega o tamanho do arquivo
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "localhost/dr/" . str_replace("\\", "/", $filename);

        array_push($data, $info);

        print_r($info);
    }

    echo "<br><br>";

}
*/



##################################
##### Criando arquivo de log #####
##################################

$file = fopen("log.txt", "a+");         // Abrir arquivo

afwrite($file, date("Y-m-d H:i:s") . "\t Usuário: 3º Sgt Fulano \t Modificou X arquivo" . "\n");     // Escrever no arquivo

fclose($file);                          // Fechar arquivo

echo "Arquivo criado com sucesso";






?>