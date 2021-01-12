<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css.css" />

</head>

<body>

<?php

if(isset($_GET['cpf'])){
    $cpf = $_GET['cpf'];
}else{
    echo 'Digite: ?cpf=12345678910';
}

echo "<div class='container'>";

    echo "<p class='title'>!!!!!!!!!! HERANÇA !!!!!!!!!!<p>";

        echo "<br>";
        echo '<p class=explicacao> É uma classe que se torna uma extensão de outra classe </p>';
        echo '<p class=explicacao> Aqui a classe Documento foi extendida para a classe Cpf </p>';
        echo '<p class=explicacao> Na classe Cpf, encontra-se um validador de CPF </p>';

        class Documento{

            private $numero;                         //Atributo
            
            public function getNumero(){             //Método

                return $this->numero;

            }

            public function setNumero($numero){

                $this->numero = $numero;

            }

        }

        class Cpf extends Documento{

            public function validar($cpf):bool{

                if(empty($cpf)) {
                    return "false";
                }
            
                $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
            
                $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
                
                
                if (strlen($cpf) != 11) {
                    echo "length";
                    return false;
                }
                
                else if ($cpf == '00000000000' || 
                    $cpf == '11111111111' || 
                    $cpf == '22222222222' || 
                    $cpf == '33333333333' || 
                    $cpf == '44444444444' || 
                    $cpf == '55555555555' || 
                    $cpf == '66666666666' || 
                    $cpf == '77777777777' || 
                    $cpf == '88888888888' || 
                    $cpf == '99999999999') {
                    return false;
            
                } else {   
                    
                    for ($t = 9; $t < 11; $t++) {
                        
                        for ($d = 0, $c = 0; $c < $t; $c++) {
                            $d += $cpf{$c} * (($t + 1) - $c);
                        }
                        $d = ((10 * $d) % 11) % 10;
                        if ($cpf{$c} != $d) {
                            return false;
                        }
                    }
            
                    return true;
                }

            }

        }

        $doc = new Cpf();
        $doc->setNumero($cpf);

        echo "<div class='container-resultado'>";

            print_r($doc->getNumero());
            echo "<br>";
            var_dump(Cpf::validar($cpf));

        echo "</div>";  //Fecha div container-resultado

    echo "</div>";  //Fecha div container

    ?>

</body>

</html>