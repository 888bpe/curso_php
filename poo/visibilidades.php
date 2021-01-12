<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css.css" />

</head>

<body>

<?php

echo "<div class='container'>";

    echo "<br><p class='title'>!!!!!!!!!! INTRODUÇÃO BÁSICA -> PUBLIC!!!!!!!!!!<p>";
    echo "<a href='https://www.php.net/manual/pt_BR/language.oop5.visibility.php' target='_blank'>Documentação das VISIBILIDADES</a>";
    echo '<p class=explicacao> Estou declarando na classe Pessoa:</p>';   
    echo '<p class=explicacao> <e> </e> public $nomePessoa</p>';
    echo '<p class=explicacao> <e> </e> public function falar()</p>';

    class Pessoa{

        public $nomePessoa;                                 //Atributo

        public function falar(){                            //Método

            return "O meu nome é " . $this->nomePessoa;     // Para buscar o nome

        }

    }

    echo "<div class='container-resultado'>";

        $glaucio = new Pessoa();                    //$glaucio vai receber algum atributo da Class Pessoa
        $glaucio->nomePessoa = "Glaucio Danial";    //Esse atributo será $nome
        echo $glaucio->falar() . "<br>";            //O método falar() é vinculado ao atributo $nome
   
    echo "</div>";  //Fecha div container-resultado 

echo "</div>";  //Fecha div container



echo "<div class='container'>";

    echo "<br><p class='title'>!!!!!!!!!! INTRODUÇÃO BÁSICA -> PRIVATE !!!!!!!!!!<p>";
    echo "<a href='https://www.php.net/manual/pt_BR/language.oop5.visibility.php' target='_blank'>Documentação das VISIBILIDADES</a>";
    echo '<p class=explicacao> Gerar os GETs e SETs e usando atributo private</p>'; 
    echo '<p class=explicacao> É muito mais seguro, pois não consigo chamar a variável diretamente</p>'; 
    echo '<p class=explicacao> Estou declarando na classe Carro:</p>';   
    echo '<p class=explicacao> <e> </e> private $modelo</p>';
    echo '<p class=explicacao> <e> </e> private $motor</p>';
    echo '<p class=explicacao> <e> </e> private $ano</p>';
    echo '<p class=explicacao> <e> <br/> </e> </p>';
    echo '<p class=explicacao> <e> </e> public function getModelo()</p>';
    echo '<p class=explicacao> <e> </e> public function setModelo($modelo)</p>';
    echo '<p class=explicacao> <e> </e> public function exibir()</p>';
    

    class Carro{

        private $modelo;    //Atributo
        private $motor;     //Atributo
        private $ano;       //Atributo

        public function getModelo(){

            return $this->modelo;

        }

        public function setModelo($modelo){

            $this->modelo = $modelo;

        }

        public function getMotor():float{

            return $this->motor;

        }

        public function setMotor($motor){

            $this->motor = $motor;

        }

        public function getAno():int{

            return $this->ano;

        }

        public function setAno($ano){

            $this->ano = $ano;

        }

        public function exibir(){

            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );

        }

    }

    echo '<p class=explicacao> <e> <br/> </e> </p>';
    echo '<p class=explicacao> <e> </e> O veículo $gol vai receber a classe new Carro e seus atributos em set</p>';

    $gol = new Carro();
    $gol->setModelo("Gol GT");
    $gol->setMotor("1.6");
    $gol->setAno("2017");
    
    echo "<div class='container-resultado'>";

        var_dump($gol->exibir());
   
    echo "</div>";  //Fecha div container-resultado

    echo "<br><br>Resumo do PRIVATE<br>";

    class Moto{
        //Gerando get
        public function getFabricante():string{
            return $this->fabricante;
        }

        //Gerando set
        public function setFabricante($fabricante){
            $this->fabricante = $fabricante;
        }

        //Gerando get
        public function getMes():string{
            return $this->mes;
        }

        //Gerando set
        public function setMes($mes){
            $this->mes = $mes;
        }

        //Função de exibe
        public function exibe(){
            return array(
                "fabricante"=>$this->getFabricante(),
                "mes"=>$this->getMes()
            );
        }

    }
    
    $titan = new Moto();
    $titan->setFabricante("Honda");
    $titan->setMes("10");

    echo "<div class='container-resultado'>";

        echo "Exibir todos os dados da array com print_r: ";
        print_r($titan->exibe());

        echo "<br>";

        echo "Exibir apenas os dados que eu quero com print_r, que no caso é o fabricante: ";
        print_r($titan->exibe()["fabricante"]);

        //echo $titan;  //Dá erro, pois não pode acessar a private assim

    echo "</div>";  //Fecha container-resultado

echo "</div>";  //Fecha container



?>

</body>

</html>