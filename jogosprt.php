<?php
        session_start();
        require_once 'CLASSES/alunos.php';
        $u = new dadosAluno;

        $u->conectar("projeto","localhost","root","");
        $listLogged = $u->logged($_SESSION['id']);

        $nomeUser = $listLogged['nome'];
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Quiz Game</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="home-box custom-box hide">
            <h3>Instruções:</h3>
            <p>Número total de questões: <span class="total-question">5</span></p>
            <button type="button" class="btn">Jogar!</button>
        </div>

        <div class="quiz-box custom-box">
            <div class="question-number">
                
            </div>
            <div class="question-text">
                
            </div>
            <div class="option-container">
                
            </div>
            <div class="next-question-btn">
                <button type="button" class="btn" onclick="next()">Next</button>
            </div>
            <div class="answers-indicator">
               
            </div>
        </div>

        <div class="result-box custom-box hide">
            <h1>Resultado do Quiz</h1>
            <table method="POST">
                <tr>
                    <td>Total de Questões</td>
                    <td><span class="total-question"></span></td>
                </tr>
                <tr>
                    <td>Questões Respondidas</td>
                    <td><span class="total-attempt"></span></td>
                </tr>
                <tr>
                    <td>Corretas</td>
                    <td><span name="pontuacao" class="total-correct"></span></td>
                </tr>
                <tr>
                    <td>Erradas</td>
                    <td><span class="total-wrong"></span></td>
                </tr>
                <tr>
                    <td>Porcentagem</td>
                    <td><span class="percentage"></span></td>
                </tr>
                <tr>
                    <td>Sua Pontuação Total</td>
                    <td><span class="total-score"></span></td>
                </tr>
                <tr>
                    <td>Pontuação Total da <?php echo $nomeUser; ?></td>
                    <td><span class="total-user"></span></td>
                </tr>
            </table>
            <button type="button" class="btn" onclick="tryAgainQuiz()">Tentar Novamente</button>
            <button type="button" class="btn" onclick="goToHome()">Voltar ao Início</button>
        </div>

<?php
if(isset($_POST['pontuacao']))
{
    $pontuacao = addslashes($_POST['pontuacao']);

    if(!empty($pontuacao))
    {
        $u->conectar("projeto","localhost","root","");
        $listPlacar = $u->placar($_SESSION['id']);

        $pntUser = $listPlacar['pontuacao'];
            
    }
    else
    {
        ?>
        <div class="msg-erro">
        Não foi possível apresentar a pontuacao!
        </div>
        <?php
    }
}
?>

<script src="js/question.js"></script>
<script src="js/app.js"></script>

</body>
</html>