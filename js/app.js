

const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];

// envia as perguntas para o Array availableQuestions
function setAvailableQuestions(){
    const totalQuestion = jogosprt.length;
    for(let i=0; i<totalQuestion; i++){
        availableQuestions.push(jogosprt[i])
    }
}

// Envio dos números e alternativas das questões
function getNewQuestion(){
    // Envio dos números de questões
    questionNumber.innerHTML = "Pergunta " + (questionCounter + 1) + " de " + jogosprt.length;

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
        // Pega a posição do 'optionIndex' do availableOptions
        const index2 = availableOptions.indexOf(optionIndex);
        // Remove 'optionIndex' do availableOptions, para não repetir
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
    }
    else {
        // Deixa vermelha a alternativa incorreta
        element.classList.add("wrong");

        // Caso a pessoa erre a questão, mostrará a correta com a cor verde
       const optionLen = optionContainer.children.length;
       for(let i=0; i<optionLen; i++){
           if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){
            optionContainer.children[i].classList.add("correct");
           }
       }     
    }

    unclickableOptions();
}

// Restringe o usuário escolher mais de uma opção
function unclickableOptions(){
    const optionLen = optionContainer.children.length;
    for(let i=0 ; i<optionLen; i++){
        optionContainer.children[i].classList.add("already-answered");
    }
}

function next(){
    if(questionCounter === jogosprt.length){
        console.log("Fim do Game");
    } else {
        getNewQuestion();
    }
}

window.onload = function(){
    // Envio das perguntas no Array availableQuestions
    setAvailableQuestions();
    // Chamada da função getNewQuestion();
    getNewQuestion();


}