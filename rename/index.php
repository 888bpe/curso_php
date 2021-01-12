<?php

$dir1 = "folder01";
$dir2 = "folder02";

if (!is_dir($dir1)){

    mkdir($dir1);

}

if (!is_dir($dir2)){

    mkdir($dir2);

}

$filename = "readme.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);

}

//mover o arquivo
rename( $dir1 . DIRECTORY_SEPARATOR . $filename,    //Diretório e nome do arquivo
        $dir2 . DIRECTORY_SEPARATOR . $filename     //Para onde vai o arquivo
);

echo "Arquivo movido com sucesso! <br/> O arquivo foi criado na folder01 e foi movido para a folder02.";

?>