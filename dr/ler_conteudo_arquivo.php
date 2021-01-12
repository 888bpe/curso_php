<?php

#########################
##### Ler Conteúdo  #####
#########################
/*
$filename = "usuarios.csv";

// Se o arquivo existir
if (file_exists($filename)){

    $file = fopen($filename, "r");

    $headers = explode("\t\t", fgets($file));
    
    $data = array();

    while($row = fgets($file)){

        $rowDados = explode("\r\n", $row);  //transforma em array
        $linhaDados = array();

        for ($i = 0; $i < count($headers); $i++){

            $linhaDados[$headers[$i]] = $rowDados[$i];

        }

        array_push($data, $linhaDados);    //Para adicionar os dados à $dados

    }

    fclose($file);

    echo json_encode($data);
    
}
*/

$filename = "logo.gif";

$base64 = base64_encode(file_get_contents($filename));   //Lê o conteúdo de um arquivo completo

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);         //Recupera qual o tipo da imagem. GIF, JPG, PNG...

//echo "data:image/gif;base64," . $base64;
$base64encode = "data:" . $mimetype . ";base64," . $base64;
?>

<a href="<?=$base64encode?>" target="_blank">Link para a Imagem</a>

<img style="width:100px;" src="<?=$base64encode?>" />

<?php



?>
