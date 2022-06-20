<?php
session_start();
include 'areaPrivada.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/main-figu.css"/>
    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
<script src="./js/scratch-card/scratch-card.js"></script>
<link rel="stylesheet" href="./css/scratch-card.css"/>
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
        <!-- Figurinhas Portugues-->
        <div class="content" style="margin-left: 20%; float: left;">
            <h2><b>Português</b></h2>
        <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container">
                <canvas id="js-canvas"></canvas>
                <div class="discount">
                <img id="discountIMG">
                </div>
            </div>
        </div>
<script>
scratchCard("./img/raspadinha.jpg","./img/port-1.jpg", 300, 300);
</script>
        <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-2">
                <canvas id="js-canvas-2"></canvas>
                <div class="discount-2">
                <img id="discountIMG-2">
                </div>
            </div>
        </div>

<script>
scratchCard2("./img/raspadinha.jpg","./img/port-2.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-3">
                <canvas id="js-canvas-3"></canvas>
                <div class="discount-3">
                <img id="discountIMG-3">
                </div>
            </div>
        </div>
<script>
scratchCard3("./img/raspadinha.jpg","./img/port-3.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-4">
                <canvas id="js-canvas-4"></canvas>
                <div class="discount-4">
                <img id="discountIMG-4">
                </div>
            </div>
        </div>
<script>
scratchCard4("./img/raspadinha.jpg","./img/port-4.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-5">
                <canvas id="js-canvas-5"></canvas>
                <div class="discount-5">
                <img id="discountIMG-5">
                </div>
            </div>
        </div>
<script>
scratchCard5("./img/raspadinha.jpg","./img/port-5.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-6">
                <canvas id="js-canvas-6"></canvas>
                <div class="discount-6">
                <img id="discountIMG-6">
                </div>
            </div>
        </div>
<script>
scratchCard6("./img/raspadinha.jpg","./img/port-6.jpg", 300, 300);
</script>
</div>

        <!-- Figurinhas Ingles-->
        <div class="content" style="margin-left: 20%; float: left;">
            <h2><b>Inglês</b></h2>
        <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-7">
                <canvas id="js-canvas-7"></canvas>
                <div class="discount-7">
                <img id="discountIMG-7">
                </div>
            </div>
        </div>
<script>
scratchCard7("./img/raspadinha.jpg","./img/ing-1.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-8">
                <canvas id="js-canvas-8"></canvas>
                <div class="discount-8">
                <img id="discountIMG-8">
                </div>
            </div>
        </div>
<script>
scratchCard8("./img/raspadinha.jpg","./img/ing-2.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-9">
                <canvas id="js-canvas-9"></canvas>
                <div class="discount-9">
                <img id="discountIMG-9">
                </div>
            </div>
        </div>
<script>
scratchCard9("./img/raspadinha.jpg","./img/ing-3.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-10">
                <canvas id="js-canvas-10"></canvas>
                <div class="discount-10">
                <img id="discountIMG-10">
                </div>
            </div>
        </div>
<script>
scratchCard10("./img/raspadinha.jpg","./img/ing-4.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-11">
                <canvas id="js-canvas-11"></canvas>
                <div class="discount-11">
                <img id="discountIMG-11">
                </div>
            </div>
        </div>
<script>
scratchCard11("./img/raspadinha.jpg","./img/ing-5.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-12">
                <canvas id="js-canvas-12"></canvas>
                <div class="discount-12">
                <img id="discountIMG-12">
                </div>
            </div>
        </div>
<script>
scratchCard12("./img/raspadinha.jpg","./img/ing-6.jpg", 300, 300);
</script>
</div>

        <!-- Figurinhas Ciencias-->
        <div class="content" style="margin-left: 20%; float: left;">
            <h2><b>Ciências</b></h2>
            <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-13">
                <canvas id="js-canvas-13"></canvas>
                <div class="discount-13">
                <img id="discountIMG-13">
                </div>
            </div>
            </div>
<script>
scratchCard13("./img/raspadinha.jpg","./img/cien-1.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-14">
                <canvas id="js-canvas-14"></canvas>
                <div class="discount-14">
                <img id="discountIMG-14">
                </div>
            </div>
            </div>
<script>
scratchCard14("./img/raspadinha.jpg","./img/cien-2.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-15">
                <canvas id="js-canvas-15"></canvas>
                <div class="discount-15">
                <img id="discountIMG-15">
                </div>
            </div>
            </div>
<script>
scratchCard15("./img/raspadinha.jpg","./img/cien-3.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-16">
                <canvas id="js-canvas-16"></canvas>
                <div class="discount-16">
                <img id="discountIMG-16">
                </div>
            </div>
            </div>
<script>
scratchCard16("./img/raspadinha.jpg","./img/cien-4.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-17">
                <canvas id="js-canvas-17"></canvas>
                <div class="discount-17">
                <img id="discountIMG-17">
                </div>
            </div>
            </div>
<script>
scratchCard17("./img/raspadinha.jpg","./img/cien-5.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-18">
                <canvas id="js-canvas-18"></canvas>
                <div class="discount-18">
                <img id="discountIMG-18">
                </div>
            </div>
            </div>
<script>
scratchCard18("./img/raspadinha.jpg","./img/cien-6.jpg", 300, 300);
</script>
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