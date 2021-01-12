<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css.css" />

</head>

<body>

<?php


echo "<div class='container'>";

    echo "<p class='title'>!!!!!!!!!! INTERFACE !!!!!!!!!!<p>";

    echo "<br>";
    echo '<p class=explicacao> É de fácil organização para o código </p>';
        
    interface Veiculo{

        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarcha($marcha);

    }

    class Civic implements Veiculo{

        public function acelerar($velocidade){

            echo "O veículo acelera até " . $velocidade . "km/h" . "<br/>";

        }

        public function freiar($velocidade){

             echo "O veículo frenou até " . $velocidade . "km/h" . "<br/>";

        }

        public function trocarMarcha($marcha){

            echo "O veículo engatou a marcha " . $marcha;

        }

    }


        

    echo "<div class='container-resultado'>";

            $carro = new Civic();
            $carro->acelerar(100);
            $carro->freiar(20);
            $carro->trocarMarcha(1);

    echo "</div>";  //Fecha div container-resultado

echo "</div>";  //Fecha div container

?>

</body>

</html>