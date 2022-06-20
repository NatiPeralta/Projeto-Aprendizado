<?php

Class dadosAluno
{
    private $pdo;
    public $msgErro = "";//tudo ok

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgErro = $e -> getMessage();
        }
        
    }
    public function cadastrar($nome, $nascimento, $email, $senha)
    {
        global $pdo;
        // verificar se já existe o email cadastrado
        $sql = $pdo->prepare("SELECT id FROM aluno WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount() > 0) //rowCount verifica se usuario existe ou nao
        {
            return false; //ja esta cadastrada
        }
        else
        {
        //caso não, Cadastrar
        $sql = $pdo->prepare("INSERT INTO aluno (nome, nascimento, email, senha) VALUES (:n, :ns, :e, :s)");
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":ns",$nascimento);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha)); //md5 embaralha a senha (criptografia como proteção para usuário)
        $sql->execute();
        return true; //tudo ok
        }
    }
    public function logar($email, $senha)
    {
        global $pdo;
        //verificar se o email e senha estao cadastrados, se sim
        $sql = $pdo->prepare("SELECT id, nome FROM aluno WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //entrar no sistema (sessao)
            $dado = $sql->fetch(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['nome'];
            return true; //logado com sucesso
        }
        else
        {
            return false; //nao foi possivel logar
        }

    }
    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM aluno WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
            return $array;
    }

   

}