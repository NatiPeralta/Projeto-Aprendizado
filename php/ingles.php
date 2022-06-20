<?php
session_start();
include 'areaPrivada.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main-3.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
    <title>Inglês</title>
</head>

<body>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="portugues.php">Português</a></li>
                    <li class="active"><a href="ingles.php">Inglês</a></li>
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
                <img src="../img/materias/to-be.png">
                <p><b>Verb to be</b></p>
                <p>O verbo to be é um dos verbos mais utilizados da língua inglesa e pode ser traduzido como ser ou estar.
                </p>
                <p>
                    <a href="./portugues.html">Clique aqui</a> para saber mais!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/present.png">
                <p><b>Present Perfect</b></p>
                <p>O present perfect é usado quando expressamos alguma ação no passado que tem repercussão no presente ou ainda continua no presente.
                </p>
                <p>
                    <a href="./ingles.html">Clique aqui</a> e aprenda!
                </p>
            </div>
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/possessive.png">
                <p><b>Possessive Adjectives</b></p>
                <p>Os possessive adjectives são uma classe de palavras responsável por modificar os substantivos, acrescentando-lhes características de propriedade ou posse.
                </p>
                <p>
                    <a href="./ciencias.html">Clique aqui</a> para saber mais!
                </p>
            </div>
        </div>
        <div class="content" style="margin-left: 17%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="../img/materias/there.png">
                <p><b>There is and There are</b></p>
                <p>Quando usar THERE IS e THERE ARE? Você vai ver que a diferença é simples e saberá como utilizá-los sem dificuldade.
                </p>
                <p>
                    <a href="./historia.html">Clique aqui</a> para aprender sobre!
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