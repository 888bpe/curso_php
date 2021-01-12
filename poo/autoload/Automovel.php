<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}

// Define a classe como abstrata
// Em qualquer automóvel, será atribuido essas classes abstratas
abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){

        echo "O veículo acelera até " . $velocidade . "km/h" . "<br/>";

    }

    public function freiar($velocidade){

        echo "O veículo frenou até " . $velocidade . "km/h" . "<br/>";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha . "<br/>";

    }

}

?>