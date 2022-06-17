const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answers-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;
let attempt = 0;

// envia as perguntas para o Array availableQuestions
function setAvailableQuestions(){
    const totalQuestion = jogosgeo.length;
    for(let i=0; i<totalQuestion; i++){
        availableQuestions.push(jogosgeo[i])
    }
}

// Envio dos números e alternativas das questões
function getNewQuestion(){
    
    // Envio dos números de questões
    questionNumber.innerHTML = "Pergunta " + (questionCounter + 1) + " de " + jogosgeo.length;
        
    // Envio das questões
    // Chamada da questão aleatória
    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;
    // Chama a posição das 'questionIndex' do Array availableQuestion;
    const index1 = availableQuestions.indexOf(questionIndex);
    // Remove o 'questionIndex' do Array availableQuestion, para que a pergunta não se repita
    availableQuestions.splice(index1,1);
    
    
    // Pega as alternativas
    const optionLen = currentQuestion.options.length
    // Envia as alternativas para o Array availableOptions
    for(let i=0; i<optionLen; i++){
        availableOptions.push(i)
    }
    optionContainer.innerHTML = '';
    let animationDelay = 0.15;
    // Cria as alternativas no HTML
    for(let i=0; i<optionLen; i++){
        // alternativas aleatórias
        const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
        // Pega a posição do 'optionIndex' do availableOptions Array
        const index2 = availableOptions.indexOf(optionIndex);
        // Remove 'optionIndex' do availableOptions Array, para não repetir
        availableOptions.splice(index2,1);
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id = optionIndex;
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.15;
        option.className = "option";
        optionContainer.appendChild(option)
        option.setAttribute("onclick", "getResult(this)");
    }

    questionCounter++
}

// Pega o resultado do current attempt question
function getResult(element){
    const id = parseInt(element.id);
    // Compara a reposta com o id da opção clicada
    console.log(typeof id)
    if(id === currentQuestion.answer){
        // Deixa verde a alternativa correta
        element.classList.add("correct");
        // Adiciona um indicador de marca correta
        updateAnswersIndicator("correct");
        correctAnswers++;
    }
    else {
        // Deixa vermelha a alternativa incorreta
        element.classList.add("wrong");
        // Adiciona um indicador de marca incorreta
        updateAnswersIndicator("wrong");

        // Caso a pessoa erre a questão, mostrará a correta com a cor verde
       const optionLen = optionContainer.children.length;
       for(let i=0; i<optionLen; i++){
           if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){
            optionContainer.children[i].classList.add("correct");
           }
       }     
    }
    attempt++;
    unclickableOptions();
}

// Restringe o usuário escolher mais de uma opção
function unclickableOptions(){
    const optionLen = optionContainer.children.length;
    for(let i=0 ; i<optionLen; i++){
        optionContainer.children[i].classList.add("already-answered");
    }
}

function answersIndicator(){
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = jogosgeo.length;
    for(let i=0; i<totalQuestion; i++){
        const indicator = document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);
    }
}
function updateAnswersIndicator(markType){
    answersIndicatorContainer.children[questionCounter-1].classList.add(markType)
}

function next(){
    if(questionCounter === jogosgeo.length){
        jogosprtOver();
    } else {
        getNewQuestion();
    }
}

function jogosprtOver(){
    quizBox.classList.add("hide");
    // Para mostrar o resultado
    resultBox.classList.remove("hide");
    quizResult();
}

// Pega o resultado do quiz
function quizResult(){
    resultBox.querySelector(".total-question").innerHTML = jogosgeo.length;
    resultBox.querySelector(".total-attempt").innerHTML = attempt;
    resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswers;
    const percentage = (correctAnswers/jogosgeo.length)*100;
    resultBox.querySelector(".percentage").innerHTML = percentage.toFixed() + "%";
    resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + jogosgeo.length;
    resultBox.querySelector(".total-user").innerHTML = correctAnswers;
}

function resetQuiz(){
     questionCounter = 0;
     correctAnswers = 0;
     attempt = 0;
}

function goToHome(){
    // hide result box
    resultBox.classList.add("hide");
    // show home box
    homeBox.classList.remove("hide");
    resetQuiz();
}

// Iniciando o jogo

function startQuiz(){
    // hide home box
    homeBox.classList.add("hide");
    // show quiz box
    quizBox.classList.remove("hide");
    // Envio das perguntas no Array availableQuestions
    setAvailableQuestions();
    // Chamada da função getNewQuestion();
    getNewQuestion();
    // para criar os indicadores das respostas
    answersIndicator();
}

window.onload = function (){
    homeBox.querySelector(".total-question").innerHTML = jogosgeo.length;
}