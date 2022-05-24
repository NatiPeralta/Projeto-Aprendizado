<?php
    require_once 'CLASSES/alunos.php';
    $u = new dadosAluno;
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="./css/main-login.css">
    </head>
<body>
<div id="corpo-form">
    <h1>Cadastrar</h1>
    <form name=dadosAluno method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="25">
        <input id="dt" type="date" name="nascimento" placeholder="Nascimento">
        <input type="email" name="email" placeholder="E-mail" maxlength="30">
        <input type="password" name="senha" placeholder="Senha" maxlength="15">
        <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
        <input id="input-btn" type="submit" value="Cadastrar">
        <input type="hidden" name="acao" value="cadastrar">
    </form>
</div>
<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $nascimento = addslashes($_POST['nascimento']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
//verificar se esta preenchido
    if(!empty($nome) && !empty($nascimento) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $u->conectar("projeto","localhost","root","");
        if($u->msgErro == "")//se esta tudo ok
        {
            if($senha == $confirmarSenha)
            {
                if($u->cadastrar($nome,$nascimento,$email,$senha))
                {
                    echo "Cadastrado com sucesso! Acesse para entrar!";
                }
                else
                {
                    echo "E-mail já cadastrado!";
                }
            }
            else
            {
                echo "Senha e Confirmar Senha não correspondem!";
            }
        }
        else
        {
            echo "Erro: ".$u->msgErro;
        }
    }
    else
    {
        echo "Preencha todos os campos!";
    }
}


?>
</body>
</html>