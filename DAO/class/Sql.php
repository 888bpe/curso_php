<?php

// Ela se extende da classe PDO, que é nativa do sistema
// Tudo que a classe PDO faz, a Sql também fará (execute(), prepare(), etc)
class Sql extends PDO{

    private $conn;

    //Fazer a variável conn se conectar automaticamente ao banco de dados
    public function __construct(){

        // Agora, basta fazer um new Sql que irei me conectar com o banco de dados
        $this->conn = new PDO("mysql:host=localhost;dbname=db_php7;", "root", "4dm*1nf0");

    }

    private function setParams($statement, $parameters = array()){

        // Associar os parâmetros ao parâmetro
        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);

        }

    }


    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }

    //
    public function query($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);    

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    // Para retornar um select
    public function select($rawQuery, $params = array()):array{

        $stmt = $this->query($rawQuery, $params);

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    

}

?>