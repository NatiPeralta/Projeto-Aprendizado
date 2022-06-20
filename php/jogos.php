<?php
session_start();
include 'areaPrivada.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main-jogos.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
    <title>Jogos</title>
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
            <h1>Venha aprender enquanto <strong>JOGA!</strong></h1>
            <p> Por aqui você consegue ler e aprender sobre qualquer matéria da sua escola
                enquanto joga um quiz de perguntas e respostas. Quanto mais respostas você acertar, mais figurinhas você ganha!
            </p>
            <p>
                Escolha qual matéria você deseja jogar o quiz e boa sorte! Para ver quais figurinhas você já ganhou, clique em 
                "Ganhe Prêmios".
                Quando quiser estudar um pouco mais, clique em "Adquire Conhecimento", assim suas chances de acertar os jogos aumenta.
            </p>
            <p>
                Divirta-se!
            </p>

            <div class="col-2 bloco-texto">
                <a href="jogos.php"><img src="../img/icones/game.png"></a>
                <h3><b>Jogue nosso quiz</b></h3>
                <p>Aqui você consegue aprender enquanto se diverte
                com os nossos jogos</p>
            </div>
            <div class="col-2 bloco-texto">
                <a href="index.php"><img src="../img/icones/book.png"></a>
                <h3><b>Adquire conhecimento</b></h3>
                <p>Temos todo o material necessário para você se preparar antes de encarar
                nossos jogos de perguntas e respostas</p>
            </div>
            <div class="col-2 bloco-texto">
                <a href="figurinhas.php"><img src="../img/icones/champion.png"></a>
                <h3><b>Ganhe prêmios</b></h3>
                <p>Quanto mais perguntas você acertar, mais figurinhas você ganha.
                Venha completar sua coleção!</p>
            </div>
        </div>
    </div>
    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 17%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="jogosprt.php"><img src="../img/materias/Quiz-Port.png"></a>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="jogosing.php"><img src="../img/materias/Quiz-Ing.png"></a>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="jogoscien.php"><img src="../img/materias/Quiz-Cien.png"></a>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="jogoshis.php"><img src="../img/materias/Quiz-His.png"></a>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="jogosgeo.php"><img src="../img/materias/Quiz-Geo.png"></a>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="jogosmat.php"><img src="../img/materias/Quiz-Mat.png"></a>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <a href="jogosfilo.php"><img src="../img/materias/Quiz-Filo.png"></a>
            </div>
        </div>
    </div>

    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4">
                <img alt="logo" title="logo" src="../img/icones/logo-2.png" width="160" height="80"/>
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