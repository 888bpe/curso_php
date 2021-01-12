<html>
<head>
    
    <title>Auto Load</title>
    <link rel="stylesheet" type="text/css" href="../../css.css" />

</head>

<body>

<?php


echo "<div class='container'>";

    echo "<p class='title'>!!!!!!!!!! AUTO LOAD !!!!!!!!!!<p>";

        echo "<br>";
        echo '<p class=explicacao> Função que carrega as classes automaticamente sem precisar do require" </p>';
        echo '<p class=explicacao> Define uma palavra para chamar o auto load </p>';
        echo '<p class=explicacao> A função autoload deve ficar configurada no config.php </p>';
        echo '<p class=explicacao> <b>IMPORTANTE!</b> O nome do arquivo deve ter o mesmo nome da classe </p>';
        echo '<p class=explicacao> Neste exemplo, crio um arquivo para: </p>';
        echo '<p class=explicacao> <e> </e> <e> </e> [interface Veiculo] e [abstract class Automovel implements Veiculo] - Chamado de automovel.php </p>';
        echo '<p class=explicacao> <e> </e> <e> </e> [class Opala extends Automovel] - Chamado de opala.php </p>';
        echo "<br/>";
        // Uso uma função mágica para chamar o autoload que irá procurar as classes dentro do diretório
        // Os códigos também poderiam estar no mesmo arquivo
        echo '<p class=explicacao> Primeiro, fazendo autoload caso os arquivos de class estejam no mesmo diretório </p>';

        function __autoload($nomeClasse){

            require_once("$nomeClasse.php");

        }

        echo "<div class='container-resultado'>";

            $carro = new Opala();

            $carro->acelerar(80);

        echo "</div>";  //Fecha div container-resultado

        unset($carro);
        
        // Desta forma consigo encontrar os arquivos se estiverem em outros diretórios
        echo '<p class=explicacao> Segundo, fazendo autoload caso os arquivos de class estejam em outros diretórios </p>';

        function incluirClasses($nomeClasse){

            if (file_exists($nomeClasse . ".php") === true){
                require_once($nomeClass . ".php");
            }
            

        }

        spl_autoload_register("incluirClasses");
        spl_autoload_register(function($nomeClasse){
            if (file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
                require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
            }
        });

        echo "<div class='container-resultado'>";

            $carro = new Ferrari();

            $carro->cor(1);

        echo "</div>";  //Fecha div container-resultado

    echo "</div>";  //Fecha div container

    ?>

</body>

</html>