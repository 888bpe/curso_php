<?php

// Criar atributo e fazer get e set para todas as  colunas da tabela
class Usuario{

    public function pularLinha(){

        echo "<br/><br/>======================================================";
        echo "<br/>======================================================";
        echo "<br/>======================================================<br/><br/>";
        
    }

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($value){
        $this->idusuario = $value;
    }


    public function getDeslogin(){
        return $this->deslogin;
    }

    public function setDeslogin($value){
        $this->deslogin = $value;
    }


    public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }


    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }


    //Médoto que obtém os dados do usuário
    public function setDados($dados){

        $this->setIdusuario($dados['idusuario']);
        $this->setDeslogin($dados['deslogin']);
        $this->setDessenha($dados['dessenha']);
        $this->setDtcadastro(new DateTime($dados['dtcadastro']));

    }


    //Aqui irá fazer a pesquisa pelo ID (ou qualquer outro dado que eu quiser)
    //Carregar pelo ID
    public function loadById($id){

        $sql = new Sql();
        
        //Aqui eu faço o select e informo que sera [WHERE idusuario = ID]
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        //Verifica se encontrou algum valor
        if (isset($result[0])){

            $this->setDados($result[0]);    //Chama métodos que obtém dados do usuário

        }

    }

    //Aqui irá carregar uma lista do select
    public static function getList(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

    }


    //Aqui irá fazer um SELECT com LIKE
    public static function search($login){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%". $login . "%"
        ));

    }


    //Autenticação com Login e Senha
    public function login($login, $password){

        $sql = new Sql();
        
        //Aqui eu faço o select e informo que sera [WHERE idusuario = ID]
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(
            ":LOGIN"=>$login,
            ":SENHA"=>$password
        ));

        //Verifica se encontrou algum usuário
        if (isset($result[0])){

           $this->setDados($result[0]);     //Chama métodos que obtém dados do usuário

        }else{

            throw new Exception("Login e/ou senha inválidos");

        }

    }


     //Para insert de usuário
     public function insert($login, $password){

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        //Query para inserir o usuário
        $sql->query("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha()
        ));
        
        


    }


    //Para update de usuário
    public function update($login, $password){

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()
        ));

    }


    //Para deletar usuário
    public function delete(){

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdusuario()
        ));

    }

    

    //Para poder exibir os dados com o echo
    public function __toString(){
        
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    
    }


}



?>