<?php
        require_once 'CLASSES/alunos.php';
        $u = new dadosAluno;
        $u->conectar("projeto","localhost","root","");

        $listLogged = $u->logged($_SESSION['id']);

        $nomeUser = $listLogged['nome'];
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/main-private.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
    <title>Projeto Aprendizado</title>
</head>

<body>
<nav class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                   <a href="index.php"><img src="./img/logo.png" width="150" height="60" /></a>
                </div>

                <div class="login">   
                <?php if(empty($_SESSION['id'])) { ?>           
                    <a href="login.php">Entrar</a>
                    <a href="cadastrar.php">Cadastrar</a>
                    <?php } else {
                        $listLogged = $u->logged($_SESSION['id']);
                        $nomeUser = $listLogged['nome'];
                    ?>
                    <a href="perfil-user.php"> <?php echo $nomeUser; ?> </a>  
                    <a href="sair.php"> Sair </a>
                    <?php } ?>
                 </div>
            </div>
        </main>    
</nav>
    <!--   <div class="col-100">
                <div class="content texto-destaque">
                <h1>Seja muito bem-vindo(a), </?php echo $nomeUser; ?>!</h1>
                    <p id="txt-private">O que você deseja fazer agora?</p>

                    <div class="col-2 bloco-texto">
                        <a href="jogos.html"><img src="./img/game.png"></a>
                        <h3><b>Jogue nosso quiz</b></h3>
                        <p>Aqui você consegue aprender enquanto se diverte
                        com os nossos jogos</p>
                    </div>
                    <div class="col-2 bloco-texto">
                        <img src="./img/book.png">
                        <h3><b>Adquire conhecimento</b></h3>
                        <p>Temos todo o material necessário para você se preparar antes de encarar
                        nossos jogos de perguntas e respostas</p>
                    </div>
                    <div class="col-2 bloco-texto">
                        <a href="figurinhas.html"><img src="./img/champion.png"></a>
                        <h3><b>Ganhe prêmios</b></h3>
                        <p>Quanto mais perguntas você acertar, mais figurinhas você ganha.
                        Venha completar sua coleção!</p>
                    </div>
                </div>
            </div>
    -->      
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>