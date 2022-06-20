<?php

    session_start();
    include 'areaPrivada.php';

    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        require_once '../CLASSES/alunos.php';
        $u = new dadosAluno;
        $u->conectar("projeto","localhost","root","");

        $listLogged = $u->logged($_SESSION['id']);

        $nomeUser = $listLogged['nome'];
    }else
    {
        header("location: login.php");
        exit;
    }
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
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
        <div class="slider-principal">
            <img src="../img/icones/slide-1.png" width="800" height="600"/>
            <img src="../img/icones/slide-2.png" width="800" height="600"/>
            <img src="../img/icones/slide-3.png" width="800" height="600"/>
        </div>
    </div>
    <div class="col-100">
        <div class="content texto-destaque">
            <h1>Venha aprender enquanto <strong>JOGA!</strong></h1>
            <p>É isso mesmo! Por aqui você consegue ler e aprender sobre qualquer matéria da sua escola
                enquanto joga um quiz de perguntas e respostas. Quanto mais respostas você acertar, mais figurinhas você ganha!
            </p>
            <p>
                <a href="./figurinhas.php">Clique aqui</a> para saber mais!
            </p>

            <div class="col-2 bloco-texto">
                <a href="jogos.php"><img src="../img/icones/game.png"></a>
                <h3><b>Jogue nosso quiz</b></h3>
                <p>Aqui você consegue aprender enquanto se diverte
                com os nossos jogos</p>
            </div>
            <div class="col-2 bloco-texto">
                <img src="../img/icones/book.png">
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
                        <img src="../img/materias/Portugues.png">
                        <p><b>Português</b></p>
                        <p>Tudo o que você precisa saber sobre a matéria está aqui. Venha explorar essa jornada!
                        </p>
                        <p>
                            <a href="./portugues.php">Clique aqui</a> para saber mais!
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="../img/materias/Ingles.png">
                        <p><b>Inglês</b></p>
                        <p>O Inglês é uma língua extremamente importante e conhecer o idioma tornou-se fundamental.
                        </p>
                        <p>
                            <a href="./ingles.php">Clique aqui</a> e aprenda!
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="../img/materias/Ciencias.png">
                        <p><b>Ciências</b></p>
                        <p>Venha explorar um mundo de novas descobertas através do nosso material.
                        </p>
                        <p>
                            <a href="./ciencias.php">Clique aqui</a> para embarcar nessa aventura!
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="../img/materias/História.png">
                        <p><b>História</b></p>
                        <p>Quer viajar para o passado? Venha aprender sobre os acontecimentos ao longo do tempo.
                        </p>
                        <p>
                            <a href="./historia.php">Clique aqui</a> para viajar no tempo!
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                    <img src="../img/materias/Geografia.png">
                    <p><b>Geografia</b></p>
                    <p>Aqui você verá tudo sobre o estudo da Terra e seus habitantes.
                    </p>
                    <p>
                        <a href="./geografia.php">Clique aqui</a> para saber mais!
                    </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                    <img src="../img/materias/Matematica.png">
                    <p><b>Matemática</b></p>
                    <p>Números, formas e cálculos de um jeito fácil e prático.
                    </p>
                    <p>
                        <a href="./matematica.php">Clique aqui</a> para se aprofundar nessa aventura numérica!
                    </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                    <img src="../img/materias/Filosofia.png">
                    <p><b>Filosofia</b></p>
                    <p>"Ser ou não ser, eis a questão", através do nosso material você entenderá sobre a filosofia do mundo.
                    </p>
                    <p>
                        <a href="./filosofia.php">Clique aqui</a> para adquirir esse conhecimento!
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
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-migrate.js"></script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>