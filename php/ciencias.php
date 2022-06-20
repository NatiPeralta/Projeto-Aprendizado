<?php
session_start();
include 'areaPrivada.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main-4.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
    <title>Ciências</title>
</head>

<body>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="portugues.php">Português</a></li>
                    <li><a href="ingles.php">Inglês</a></li>
                    <li class="active"><a href="ciencias.php">Ciências</a></li>
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
    <div class="col-100 materia">
        <div class="content">
            <p>
                <b>Conteúdo para Estudar</b>
            </p>
        </div>
    </div>
    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 17%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/som.png">
                <p><b>Som</b></p>
                <p>O som é uma onda capaz de propagar-se pelo ar e por outros meios a partir da vibração de suas moléculas.
                </p>
                <p>
                    <a href="./portugues.html">Clique aqui</a> para saber mais!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/heterocromia.png">
                <p><b>Heterocromia</b></p>
                <p>Heterocromia ou heterocromia ocular causado por um fator genético no qual o humano ou animal, possui um olho de cada cor.
                </p>
                <p>
                    <a href="./ingles.html">Clique aqui</a> e veja mais sobre!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/rochas.png">
                <p><b>Formação de Rochas</b></p>
                <p>Venha aprender sobre o Magma, uma substância responsável pela formaçã de rochas ígneas ou magmáticas.
                </p>
                <p>
                    <a href="./ciencias.html">Clique aqui</a> para entender melhor!
                </p>
            </div>
        </div>
        <div class="content" style="margin-left: 17%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/terra.png">
                <p><b>Camadas da Terra</b></p>
                <p>Existem três camadas que formam a composição da Terra e possuem características distintas entre si.
                </p>
                <p>
                    <a href="./historia.html">Clique aqui</a> para saber tudo!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/solar.png">
                <p><b>Sistema Solar</b></p>
                <p>O Sistema Solar é composto por oito planetas, conforme se considera hoje em dia, além de planetas anões e corpos celestes.
                </p>
                <p>
                    <a href="./geografia.html">Clique aqui</a> para saber mais!
                </p>
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