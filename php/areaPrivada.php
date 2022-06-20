<?php
        require_once '../CLASSES/alunos.php';
        $u = new dadosAluno;
        $u->conectar("projeto","localhost","root","");

        $listLogged = $u->logged($_SESSION['id']);

        $nomeUser = $listLogged['nome'];
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main-private.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
    <title>Projeto Aprendizado</title>
</head>

<body>
<nav class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                   <a href="./index.php"><img src="../img/icones/logo.png" width="150" height="60" /></a>
                </div>

                <div class="login">   
                <?php if(empty($_SESSION['id'])) { ?>           
                    <a href="./login.php">Entrar</a>
                    <a href="./cadastrar.php">Cadastrar</a>
                    <?php } else {
                        $listLogged = $u->logged($_SESSION['id']);
                        $nomeUser = $listLogged['nome'];
                    ?>
                    <a href="./perfil-user.php"> <?php echo $nomeUser; ?> </a>  
                    <a href="./sair.php"> Sair </a>
                    <?php } ?>
                 </div>
            </div>
        </main>    
</nav>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>