<?php
session_start();
include 'areaPrivada.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main-6.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
    <title>Geografia</title>
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
                    <li class="active"><a href="geografia.php">Geografia</a></li>
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
                <img src="../img/materias/fuso.png">
                <p><b>Fuso Horário</b></p>
                <p>A Terra se divide em 24 fusos horários, e cada um deles corresponde a um intervalo de 15°.
                </p>
                <p>
                    <a href="./portugues.html">Clique aqui</a> para saber mais!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/elementos.png">
                <p><b>Elementos Climáticos</b></p>
                <p>Os elementos climáticos são aqueles que atuam na atmosfera e são modificados pelos fatores de influência.
                </p>
                <p>
                    <a href="./ingles.html">Clique aqui</a> e aprenda!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/agua.png">
                <p><b>Água Superficial e Subterrânea</b></p>
                <p>As águas superficiais são aquelas que brotam pela superfície terrestre, escoando numa formação inicial em termos de mina.
                </p>
                <p>
                    <a href="./ciencias.html">Clique aqui</a> para entender melhor!
                </p>
            </div>
        </div>
        <div class="content" style="margin-left: 17%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/hidrografia.png">
                <p><b>Hidrografia</b></p>
                <p>Os mares e os oceanos, situados principalmente no hemisfério sul, correspondem a 71% da superfície do globo, e os rios e lagoas a menos de 3%.
                </p>
                <p>
                    <a href="./historia.html">Clique aqui</a> para saber mais!
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