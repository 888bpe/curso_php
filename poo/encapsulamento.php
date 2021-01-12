<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css.css" />

</head>

<body>

<?php

echo "<div class='container'>";

    echo "<br><p class='title'>!!!!!!!!!! ENCAPSULAMENTO !!!!!!!!!!<p>";
    echo '<p class=explicacao> Estou declarando na classe PessoaEncaps:</p>';
    echo '<p class=explicacao> <e> </e> public $nomeEncaps</p>';
    echo '<p class=explicacao> <e> </e> protected $idade</p>';
    echo '<p class=explicacao> <e> </e> private $senha</p>';
    echo '<p class=explicacao> <e> </e> public function verDados()</p>';

    class PessoaEncaps{

        public $nomeEncaps = "Rasmus Lerdorf"; //Atributo
        protected $idade = 48;                  //Atributo
        private $senha = "123456";              //Atributo

        public function verDados(){             //Método

            echo $this->nomeEncaps . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";

        }

    }

    $objeto = new PessoaEncaps();

    echo "<br>";
    echo '<p class=explicacao> Tentarei acessar os dados das classes declaradas </p>';
    echo '<p class=explicacao> Consigo acessar a public $nomeEncaps, pois ela é pública </p>';
    echo '<p class=explicacao> Não consigo acessar a protected $idade </p>';
    echo '<p class=explicacao> Não consigo acessar a private $senha </p>';

    echo "<div class='container-resultado'>";

        echo $objeto->nomeEncaps . "<br/>";
        //echo $objeto->idade . "<br/>";
        //echo $objeto->senha . "<br/>";

    echo "</div>";  //Fecha div container-resultado

    echo '<p class=explicacao> Agora estarei chamando a função pública verDados() </p>';
    echo '<p class=explicacao> Consigo ver todos os dados, pois eles estão na mesma função </p>';

    echo "<div class='container-resultado'>";

        $objeto->verDados();

    echo "</div>";  //Fecha div container-resultado


    echo '<p class=explicacao> Usarei o comando <b>EXTENDS</b> para acessar a classe PessoaEncaps a partir de outra classe</p>';
    echo '<p class=explicacao> Ele não terá acesso ao que for <b>PRIVATE</b>, neste caso, $senha </p>';

    unset($objeto);

    class Programador extends PessoaEncaps{

        public function verDados(){             //Método
            
            echo get_class($this) . "<br/>";    // Mostra o nome da classe
            echo $this->nomeEncaps . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";

        }
        
    }

    echo "<div class='container-resultado'>";
    
        $objeto = new Programador;

        $objeto->verDados();

    echo "</div>";  //Fecha div container-resultado

echo "</div>";  //Fecha div container

?>

</body>

</html>