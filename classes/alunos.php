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
        if($sql->rowCount() > 0)
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
        $sql = $pdo->prepare("SELECT id FROM aluno WHERE email = :e AND senha = :s");
        $sql->bindValue(":e,$email");
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //entrar no sistema (sessao)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true; //logado com sucesso
        }
        else
        {
            return false; //nao foi possivel logar
        }

    }
}