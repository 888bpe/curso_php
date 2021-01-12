<?php

class Pessoa{

    public $nome;               //Atributo

    public function falar(){    //Método

        return "O meu nome é " . $this->nome; // Para buscar o nome

    }

}

$glaucio = new Pessoa();            //$glaucio vai receber algum atributo da Class Pessoa
$glaucio->nome = "Glaucio Danial";  //Esse atributo será $nome
echo $glaucio->falar() . "<br>";    //O método falar() é vinculado ao atributo $nome


?>




