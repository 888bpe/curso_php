<!-- Form sem action redireciona para a mesma página -->
<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload" /> <br/><br/>
    <input type="submit" value="ENVIAR" />

</form>


<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"];  //fileUpload é o name do input que recebe o arquivo

    //caso dê erro
    if($file["error"]) {

        throw new Exception("Error: " . $file["error"]);

    }

    //diretório que vai receber os arquivos
    $dirUploads = "uploads";

    if(!is_dir($dirUploads)){
    
        mkdir($dirUploads);

    }

    //busca o arquivo no diretorio temporario e direciona para onde ele será enviado
    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {

        echo "Upload realizado com sucesso!";

    }else{

        throw new Exception("Não foi possível realizar o upload.");

    }

}

?>