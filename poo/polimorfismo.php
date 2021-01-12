<html>
<head>
    
    <title>Polimorfismo</title>
    <link rel="stylesheet" type="text/css" href="../css.css" />

</head>

<body>

<?php


echo "<div class='container'>";

    echo "<p class='title'>!!!!!!!!!! POLIMORFISMO !!!!!!!!!!<p>";

        echo "<br>";
        echo '<p class=explicacao> Vem do  grego "Ter muitas formas" </p>';
        echo '<p class=explicacao> Métodos com mesmo nome, em classes diferentes, tem comportamentos diferentes </p>';

        abstract class Animal{

            public function falar(){

                return "Som <br/>";

            }

            public function mover(){

                return "Andar <br/>";

            }

        }

        class Cachorro extends Animal{

            public function falar(){

                return "Late <br/>";

            }

        }

        class Gato extends Animal{

            public function falar(){

                return "Mia <br/>";

            }

        }

        class Passaro extends Animal{

            public function falar(){

                return "Canta <br/>";

            }

            public function mover(){

                return "Voa e " . parent::mover();  // Chata o método mover da classe animal

            }


        }


        echo "<div class='container-resultado'>";
         
            echo '<p class=explicacao> Utilizando a class Cachorro</p>';
            $pluto = new Cachorro();
            echo $pluto->falar();
            echo $pluto->mover(); 

            echo "<br/>";

            echo '<p class=explicacao> Utilizando a class Gato</p>';
            $garfield = new Gato();
            echo $garfield->falar();
            echo $garfield->mover();

            echo "<br/>";

            echo '<p class=explicacao> Utilizando a class Passaro</p>';
            $bird = new Passaro();
            echo $bird->falar();
            echo $bird->mover();

        echo "</div>";  //Fecha div container-resultado

    echo "</div>";  //Fecha div container

    ?>

</body>

</html>