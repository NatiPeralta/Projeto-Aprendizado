<?php
    require_once 'CLASSES/alunos.php';
    $u = new dadosAluno;
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./css/main-login.css">
    </head>
<body>
<div id="corpo-form">
    <h1>Entrar</h1>
    <form method="POST">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Senha" name="senha" id="senha">
        <button type="button" onclick="mostrarSenha()" id="senha"> Mostrar Senha </button>
        <input id="input-btn" type="submit" value="Entrar">
        <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
    </form>
</div>
<script>
    function mostrarSenha(){
        var tipo = document.getElementById("senha");
        if(tipo.type == "password") {
            tipo.type = "text";    
        }else{
            tipo.type = "password";      
        }
    }
</script>
<?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if(!empty($email) && !empty($senha))
    {
        $u->conectar("projeto","localhost","root","");
        if($u->msgErro == "")
        {
            if($u->logar($email,$senha))
            {
                //aqui entra na area privada (SESSAO)
                header("location: areaPrivada.php");
            }
            else
            {
                ?>
                <div class="msg-erro">
                E-mail e/ou senha estão incorretos!
                </div>
                <?php
            }
        }
        else
        {
            ?>
            <div class="msg-erro">
                <?php echo "Erro: ".$u->msgErro; ?>
            </div>
            <?php
        }
    }
    else
    {
        ?>
        <div class="msg-erro">
        Preencha todos os campos!
        </div>
        <?php
    }
}
?>
</body>
</html>