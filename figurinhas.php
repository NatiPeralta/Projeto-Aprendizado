<?php
session_start();
include 'areaPrivada.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/main-figu.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
    <title>Projeto Aprendizado</title>
</head>

<body>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="portugues.php">Português</a></li>
                    <li><a href="ingles.php">Inglês</a></li>
                    <li><a href="ciencias.php">Ciências</a></li>
                    <li><a href="historia.php">História</a></li>
                    <li><a href="geografia.php">Geografia</a></li>
                    <li><a href="matematica.php">Matemática</a></li>
                    <li><a href="filosofia.php">Filosofia</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Pesquisar" type="text" />
            </div>
        </div>
    </main> 
    <div class="col-100">
        <div class="content texto-destaque">
            <h1>Suas <strong>Artes!</strong></h1>
            <p>
                Aqui você encontra todas as artes que você ganhar ao ir acertando as questões dos jogos.
                Quanto mais você acertar, mais desenhos você ganha!
            </p>
            <p>
                Cada matéria possui uma coleção específica. Você irá encontrar sua coleção aqui.
            </p>
            <p>
                As artes podem ser impressas para você colorir na sua casa. Aproveite!
            </p>

            <div class="col-2 bloco-texto">
                <a href="jogos.php"><img src="./img/game.png"></a>
                <h3><b>Jogue nosso quiz</b></h3>
                <p>Aqui você consegue aprender enquanto se diverte
                com os nossos jogos</p>
            </div>
            <div class="col-2 bloco-texto">
                <a href="index.php"><img src="./img/book.png"></a>
                <h3><b>Adquire conhecimento</b></h3>
                <p>Temos todo o material necessário para você se preparar antes de encarar
                nossos jogos de perguntas e respostas</p>
            </div>
            <div class="col-2 bloco-texto">
                <a href="figurinhas.php"><img src="./img/champion.png"></a>
                <h3><b>Ganhe prêmios</b></h3>
                <p>Quanto mais perguntas você acertar, mais figurinhas você ganha.
                Venha completar sua coleção!</p>
            </div>
        </div>
    </div>
    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 17%; float: left;">
            <div>
                <h1>Coleção das Artes</h1>    
            </div>
            <h2>
                <b>
                    Português
                </b>
            </h2>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/port-1.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/port-2.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/port-3.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/port-4.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/port-5.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/port-6.jpg">
            </div>
        </div>
        <div class="content" style="margin-left: 17%; float: left;">
            <h2>
                <b>
                    Inglês
                </b>
            </h2>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/ing-1.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/ing-2.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/ing-3.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/ing-4.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/ing-5.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/ing-6.jpg">
            </div>
        </div>
        <div class="content" style="margin-left: 17%; float: left;">
            <h2>
                <b>
                    Ciências
                </b>
            </h2>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/cien-1.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/cien-2.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/cien-3.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/cien-4.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/cien-5.jpg">
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/cien-6.jpg">
            </div>
        </div>
    </div>

    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4">
                <img alt="logo" title="logo" src="img/logo-2.png" width="160" height="80"/>
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