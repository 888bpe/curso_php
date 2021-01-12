<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css.css" />

</head>

<body>

<?php

echo "<div class='container'>";

echo "<br><p class='title'>!!!!!!!!!! MÉTODOS MÁGICOS !!!!!!!!!!<p>";
echo "<a href='https://www.php.net/manual/pt_BR/language.oop5.magic.php' target='_blank'>Documentação do MÉTODO MÁGICO</a><br><br>";

class Endereco{

    private $logradouro;    //Atributo
    private $numero;        //Atributo
    private $cidade;        //Atributo

    public function __construct($a, $b, $c){    //Não precisa ser o mesmo nome dos atributos

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    //MUITO BOM!
    public function __toString(){               //Para poder exibir com o echo

        return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;

    }

}

$meuEndereco = new Endereco("Rua Amelia Barsotti Simi", "7", "São Paulo");
print_r($meuEndereco);

echo "<br>";

echo $meuEndereco;

echo "</div>";  //Fecha div container

?>

</body>

</html>