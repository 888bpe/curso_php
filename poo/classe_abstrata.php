<html>
<head>
    
    <title>Classe Abstrata</title>
    <link rel="stylesheet" type="text/css" href="../css.css" />

</head>

<body>

<?php


echo "<div class='container'>";

    echo "<p class='title'>!!!!!!!!!! CLASSE ABSTRATA !!!!!!!!!!<p>";

        echo "<br>";
        echo '<p class=explicacao> Definimos os métodos que precisam ter e o que eles fazem </p>';
        echo '<p class=explicacao> Crio uma classe abstrata e defino o que ela faz </p>';
        echo '<p class=explicacao> Para usá-la, crio uma segunda classe que vai extendê-la </p>';

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


        // Classe que será extensão do Automóvel
        class Opala extends Automovel{
            
            // Posso atribuir métodos específicos dela
            public function nitro($nitro){

                echo "O nitro está ativo";

            }

        }

        

        echo "<div class='container-resultado'>";

            $carro = new Opala();
            $carro->acelerar(200);
            $carro->freiar(20);
            $carro->trocarMarcha(1);
            $carro->nitro(1);

        echo "</div>";  //Fecha div container-resultado

    echo "</div>";  //Fecha div container

    ?>

</body>

</html>