<?php

/**
 * @author Fabio Claret
 * data abril/2024
 * Classe com conexao a banco de dados
 * @return boolean 
 */

class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    /**
     * @author Fabio Claret
     * data abril/2024
     * Metodo de conexao ao banco de dados
     * Tirei o metodo construtor porque ele nao retorna nada e queria testar se conectou
     * @return boolean 
     */

     public function conecta(){
        $caminho = "mysql:dbname=contato;host=localhost";
        $usuario = "root";
        $senha   = "";
        try {
            $this->pdo = new PDO($caminho, $usuario, $senha);
            return $this->pdo;
        } catch (\Throwable $th) {
            echo "<script> alert('<h2>Banco de dados Indisponivel, tente mais tarde!'</script>";
        }
    }

    function cadastraUsuario($nome, $email, $senha){
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute(); 
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function insertUser($email, $senha, $nome, $nivel = 1){
    
        # 1º passo: criar variavel com uma consulta SQL, colocando apelidos para os parametros:
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s, level = :l";

        # 2º passo: acessar o metodo prepare passando a consulta criada acima
        $sql = $this->pdo->prepare($sql);

        # 3º passo: Para cada apelido, usar o metodo bindValue para encapsular os parametros:
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",$senha);
        $sql->bindValue(":l",$nivel);

        # 4º passo executar o comando:
        return $sql->execute();    
    }

    function checkUser($email){
        $sql = "SELECT * FROM usuarios where email = :e";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":e" , $email);

        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        }else{
            return false;
        } 
    }

    
        
       






}