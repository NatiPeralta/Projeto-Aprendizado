<?php

    session_start();
    if(!isset($_SESSION['id']))
    {
        header("location: login.php");
        exit;
    }
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/main-private.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
    <title>Projeto Aprendizado</title>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                   <a href="index.php"><img src="./img/logo.png" width="150" height="60" /></a>
                </div>
                <div class="login">
                    <a href="perfil-user.php"> Meu Perfil </a>
                    <a href="sair.php"> Sair </a>
                 </div>
            </div>
        </main>    
    </header>  
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="portugues.html">Português</a></li>
                    <li><a href="ingles.html">Inglês</a></li>
                    <li><a href="ciencias.html">Ciências</a></li>
                    <li><a href="historia.html">História</a></li>
                    <li><a href="geografia.html">Geografia</a></li>
                    <li><a href="matematica.html">Matemática</a></li>
                    <li><a href="filosofia.html">Filosofia</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Pesquisar" type="text" />
            </div>
        </div>
    </main> 
    <div class="col-100">
        <div class="content texto-destaque">
            <?php
            if(isset($_POST['nome'])){
                echo "Seja muito bem-vindo " . $_POST['nome'] . "<br>";
                echo "<a href='sair.php'>Sair</a><br>";
            }else{
                echo "<a href='cadastrar.php'>Cadastrar</a>";
            }
            ?>

            <h1>Seja muito bem-vindo!</h1>
            <p>É isso mesmo! Por aqui você consegue ler e aprender sobre qualquer matéria da sua escola
                enquanto joga um quiz de perguntas e respostas. Quanto mais respostas você acertar, mais figurinhas você ganha!
            </p>
            <p>
                <a href="./figurinhas.html">Clique aqui</a> para saber mais!
            </p>

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
                
    <footer>
        <div class="col-100 footer">
            <div class="content">
                    <div class="col-4">
                    <h3><b>Um pouco sobre nós</b></h3>
                    <p>Somos uma dupla de estudantes com um objetivo em comum: Transformar a curiosidade em sabedoria!</p>
                </div>
                <div class="col-4">
                    <h3><b>Nosso objetivo</b></h3>
                    <p>É com esse pensamento que elaboramos o Projeto Aprendizado, um site que busca proporcionar
                    diversão e estudos através de jogos focados nas disciplinas vistas em aula do Ensino Fundamental.</p>
                </div>
                <div class="col-4">
                    <h3><b>Localização</b></h3>
                    <p>Porto Alegre - Rio Grande do Sul, Brasil</p>
                </div>
                <div class="col-4">
                    <h3><b>Contato</b></h3>
                    <p class="email">nati.g.peralta@hotmail.com</p>
                    <p class="email">vitoremt@hotmail.com</p>
                    <p>Projeto desenvolvido por Natália Peralta e Vitor Costa</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="col-100 footer-2">
        <div class="content">
            <p>
            COPYRIGHT © 2022 REDE FADERGS. TODOS OS DIREITOS RESERVADOS.
            </p>
        </div>
    </div>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>