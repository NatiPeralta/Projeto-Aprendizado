<?php
        session_start();
        require_once '../CLASSES/alunos.php';
        $u = new dadosAluno;

        $u->conectar("projeto","localhost","root","");
        $listLogged = $u->logged($_SESSION['id']);

        $nomeUser = $listLogged['nome'];

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Quiz Filosofia</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="home-box custom-box">
            <h3>Instruções:</h3>
            <p>Número total de questões: <span class="total-question"></span></p>
            <button type="button" class="btn" onclick="startQuiz()">Jogar!</button>
        </div>

        <div class="quiz-box custom-box hide">
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
                    <td>Pontuação Total do(a) <?php echo $nomeUser; ?></td>
                    <td><span class="total-user"></span></td>
                </tr>
            </table>
            <button type="button" class="btn" onclick="goToHome()">Tentar Novamente</button>
        </div>

<script src="../js/question/question-7.js"></script>
<script src="../js/app/app-7.js"></script>

</body>
</html>