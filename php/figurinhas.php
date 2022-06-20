<?php
session_start();
include 'areaPrivada.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/main-figu.css"/>
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
<script src="../js/scratch-card/scratch-card.js"></script>
<link rel="stylesheet" href="../css/scratch-card.css"/>
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
scratchCard("../img/materias/raspadinha.jpg","../img/portugues/port-1.jpg", 300, 300);
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
scratchCard2("../img/materias/raspadinha.jpg","../img/portugues/port-2.jpg", 300, 300);
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
scratchCard3("../img/materias/raspadinha.jpg","../img/portugues/port-3.jpg", 300, 300);
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
scratchCard4("../img/materias/raspadinha.jpg","../img/portugues/port-4.jpg", 300, 300);
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
scratchCard5("../img/materias/raspadinha.jpg","../img/portugues/port-5.jpg", 300, 300);
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
scratchCard6("../img/materias/raspadinha.jpg","../img/portugues/port-6.jpg", 300, 300);
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
scratchCard7("../img/materias/raspadinha.jpg","../img/ingles/ing-1.jpg", 300, 300);
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
scratchCard8("../img/materias/raspadinha.jpg","../img/ingles/ing-2.jpg", 300, 300);
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
scratchCard9("../img/materias/raspadinha.jpg","../img/ingles/ing-3.jpg", 300, 300);
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
scratchCard10("../img/materias/raspadinha.jpg","../img/ingles/ing-4.jpg", 300, 300);
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
scratchCard11("../img/materias/raspadinha.jpg","../img/ingles/ing-5.jpg", 300, 300);
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
scratchCard12("../img/materias/raspadinha.jpg","../img/ingles/ing-6.jpg", 300, 300);
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
scratchCard13("../img/materias/raspadinha.jpg","../img/ciencias/cien-1.jpg", 300, 300);
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
scratchCard14("../img/materias/raspadinha.jpg","../img/ciencias/cien-2.jpg", 300, 300);
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
scratchCard15("../img/materias/raspadinha.jpg","../img/ciencias/cien-3.jpg", 300, 300);
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
scratchCard16("../img/materias/raspadinha.jpg","../img/ciencias/cien-4.jpg", 300, 300);
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
scratchCard17("../img/materias/raspadinha.jpg","../img/ciencias/cien-5.jpg", 300, 300);
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
scratchCard18("../img/materias/raspadinha.jpg","../img/ciencias/cien-6.jpg", 300, 300);
</script>
</div>

<!-- Figurinhas Historia-->
<div class="content" style="margin-left: 20%; float: left;">
            <h2><b>História</b></h2>
            <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-19">
                <canvas id="js-canvas-19"></canvas>
                <div class="discount-19">
                <img id="discountIMG-19">
                </div>
            </div>
            </div>
<script>
scratchCard19("../img/materias/raspadinha.jpg","../img/historia/his-1.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-20">
                <canvas id="js-canvas-20"></canvas>
                <div class="discount-20">
                <img id="discountIMG-20">
                </div>
            </div>
            </div>
<script>
scratchCard20("../img/materias/raspadinha.jpg","../img/historia/his-2.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-21">
                <canvas id="js-canvas-21"></canvas>
                <div class="discount-21">
                <img id="discountIMG-21">
                </div>
            </div>
            </div>
<script>
scratchCard21("../img/materias/raspadinha.jpg","../img/historia/his-3.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-22">
                <canvas id="js-canvas-22"></canvas>
                <div class="discount-22">
                <img id="discountIMG-22">
                </div>
            </div>
            </div>
<script>
scratchCard22("../img/materias/raspadinha.jpg","../img/historia/his-4.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-23">
                <canvas id="js-canvas-23"></canvas>
                <div class="discount-23">
                <img id="discountIMG-23">
                </div>
            </div>
            </div>
<script>
scratchCard23("../img/materias/raspadinha.jpg","../img/historia/his-5.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-24">
                <canvas id="js-canvas-24"></canvas>
                <div class="discount-24">
                <img id="discountIMG-24">
                </div>
            </div>
            </div>
<script>
scratchCard24("../img/materias/raspadinha.jpg","../img/historia/his-6.jpg", 300, 300);
</script>
</div>

<!-- Figurinhas Geografia-->
<div class="content" style="margin-left: 20%; float: left;">
            <h2><b>Geografia</b></h2>
            <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-25">
                <canvas id="js-canvas-25"></canvas>
                <div class="discount-25">
                <img id="discountIMG-25">
                </div>
            </div>
            </div>
<script>
scratchCard25("../img/materias/raspadinha.jpg","../img/geografia/geo-1.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-26">
                <canvas id="js-canvas-26"></canvas>
                <div class="discount-26">
                <img id="discountIMG-26">
                </div>
            </div>
            </div>
<script>
scratchCard26("../img/materias/raspadinha.jpg","../img/geografia/geo-2.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-27">
                <canvas id="js-canvas-27"></canvas>
                <div class="discount-27">
                <img id="discountIMG-27">
                </div>
            </div>
            </div>
<script>
scratchCard27("../img/materias/raspadinha.jpg","../img/geografia/geo-3.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-28">
                <canvas id="js-canvas-28"></canvas>
                <div class="discount-28">
                <img id="discountIMG-28">
                </div>
            </div>
            </div>
<script>
scratchCard28("../img/materias/raspadinha.jpg","../img/geografia/geo-4.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-29">
                <canvas id="js-canvas-29"></canvas>
                <div class="discount-29">
                <img id="discountIMG-29">
                </div>
            </div>
            </div>
<script>
scratchCard29("../img/materias/raspadinha.jpg","../img/geografia/geo-5.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-30">
                <canvas id="js-canvas-30"></canvas>
                <div class="discount-30">
                <img id="discountIMG-30">
                </div>
            </div>
            </div>
<script>
scratchCard30("../img/materias/raspadinha.jpg","../img/geografia/geo-6.jpg", 300, 300);
</script>
</div>

<!-- Figurinhas Matematica-->
<div class="content" style="margin-left: 20%; float: left;">
            <h2><b>Matematica</b></h2>
            <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-31">
                <canvas id="js-canvas-31"></canvas>
                <div class="discount-31">
                <img id="discountIMG-31">
                </div>
            </div>
            </div>
<script>
scratchCard31("../img/materias/raspadinha.jpg","../img/matematica/mat-1.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-32">
                <canvas id="js-canvas-32"></canvas>
                <div class="discount-32">
                <img id="discountIMG-32">
                </div>
            </div>
            </div>
<script>
scratchCard32("../img/materias/raspadinha.jpg","../img/matematica/mat-2.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-33">
                <canvas id="js-canvas-33"></canvas>
                <div class="discount-33">
                <img id="discountIMG-33">
                </div>
            </div>
            </div>
<script>
scratchCard33("../img/materias/raspadinha.jpg","../img/matematica/mat-3.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-34">
                <canvas id="js-canvas-34"></canvas>
                <div class="discount-34">
                <img id="discountIMG-34">
                </div>
            </div>
            </div>
<script>
scratchCard34("../img/materias/raspadinha.jpg","../img/matematica/mat-4.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-35">
                <canvas id="js-canvas-35"></canvas>
                <div class="discount-35">
                <img id="discountIMG-35">
                </div>
            </div>
            </div>
<script>
scratchCard35("../img/materias/raspadinha.jpg","../img/matematica/mat-5.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-36">
                <canvas id="js-canvas-36"></canvas>
                <div class="discount-36">
                <img id="discountIMG-36">
                </div>
            </div>
            </div>
<script>
scratchCard36("../img/materias/raspadinha.jpg","../img/matematica/mat-6.jpg", 300, 300);
</script>
</div>

<!-- Figurinhas Filosofia-->
<div class="content" style="margin-left: 20%; float: left;">
            <h2><b>Filosofia</b></h2>
            <div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-37">
                <canvas id="js-canvas-37"></canvas>
                <div class="discount-37">
                <img id="discountIMG-37">
                </div>
            </div>
            </div>
<script>
scratchCard37("../img/materias/raspadinha.jpg","../img/filosofia/filo-1.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-38">
                <canvas id="js-canvas-38"></canvas>
                <div class="discount-38">
                <img id="discountIMG-38">
                </div>
            </div>
            </div>
<script>
scratchCard38("../img/materias/raspadinha.jpg","../img/filosofia/filo-2.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-39">
                <canvas id="js-canvas-39"></canvas>
                <div class="discount-39">
                <img id="discountIMG-39">
                </div>
            </div>
            </div>
<script>
scratchCard39("../img/materias/raspadinha.jpg","../img/filosofia/filo-3.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-40">
                <canvas id="js-canvas-40"></canvas>
                <div class="discount-40">
                <img id="discountIMG-40">
                </div>
            </div>
            </div>
<script>
scratchCard40("../img/materias/raspadinha.jpg","../img/filosofia/filo-4.jpg", 300, 300);
</script>

<div class="col-3 bloco-texto bloco-imagem">
            <div id="js-container-41">
                <canvas id="js-canvas-41"></canvas>
                <div class="discount-41">
                <img id="discountIMG-41">
                </div>
            </div>
            </div>
<script>
scratchCard41("../img/materias/raspadinha.jpg","../img/filosofia/filo-5.jpg", 300, 300);
</script>
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