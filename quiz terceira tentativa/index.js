const $startGameButton = document.querySelector(".start-quiz")
const $nextQuestionButton = document.querySelector(".next-question")
const $questionsContainer = document.querySelector(".questions-container")
const $questionText = document.querySelector(".question")
const $answersContainer = document.querySelector(".answers-container")
const $answers = document.querySelectorAll(".answer")

let currentQuestionIndex = 0
let totalCorrect = 0

$startGameButton.addEventListener("click", startGame)
$nextQuestionButton.addEventListener("click", displayNextQuestion)

function startGame() {
  $startGameButton.classList.add("hide")
  $questionsContainer.classList.remove("hide")
  displayNextQuestion()
}

function displayNextQuestion() {
  resetState()
  
  if (questions.length === currentQuestionIndex) {
    return finishGame()
  }

  $questionText.textContent = questions[currentQuestionIndex].question
  questions[currentQuestionIndex].answers.forEach(answer => {
    const newAsnwer = document.createElement("button")
    newAsnwer.classList.add("button", "answer")
    newAsnwer.textContent = answer.text
    if (answer.correct) {
      newAsnwer.dataset.correct = answer.correct
    }
    $answersContainer.appendChild(newAsnwer)

    newAsnwer.addEventListener("click", selectAnswer)
  })
}

function resetState() {
  while($answersContainer.firstChild) {
    $answersContainer.removeChild($answersContainer.firstChild)
  }

  document.body.removeAttribute("class")
  $nextQuestionButton.classList.add("hide")
}

function selectAnswer(event) {
  const answerClicked = event.target

  if (answerClicked.dataset.correct) {
    document.body.classList.add("correct")
    totalCorrect++
  } else {
    document.body.classList.add("incorrect") 
  }

  document.querySelectorAll(".answer").forEach(button => {
    button.disabled = true

    if (button.dataset.correct) {
      button.classList.add("correct")
    } else {
      button.classList.add("incorrect")
    }
  })
  
  $nextQuestionButton.classList.remove("hide")
  currentQuestionIndex++
}

function finishGame() {
  const totalQuestions = questions.length
  const performance = Math.floor(totalCorrect * 100 / totalQuestions)
  
  let message = ""

  switch (true) {
    case (performance >= 90):
      message = "Excelente :)"
      break
    case (performance >= 70):
      message = "Muito bom :)"
      break
    case (performance >= 50):
      message = "Bom"
      break
    default:
      message = "Pode melhorar :("
  }

  $questionsContainer.innerHTML = 
  `
    <p class="final-message">
      Você acertou ${totalCorrect} de ${totalQuestions} questões!
      <span>Resultado: ${message}</span>
    </p>
    <button 
      onclick=window.location.reload() 
      class="button"
    >
      Refazer teste
    </button>
  `
}


const questions = [
  {
    question: "Quantas libertadores o Corinthians tem",
    answers: [
      { text: "5", correct: false },
      { text: "3", correct: false },
      { text: "2", correct: true },
      { text: "1", correct: false }
    ]
  },
  {
    question: "Em que ano o Corinthians ganhou seu primerio mundial",
    answers: [
      { text: "2000", correct: true },
      { text: "2002", correct: false },
      { text: "1999", correct: false },
      { text: "2010", correct: false }
    ]
  },
  {
    question: 'Em que ano o Corinthians foi fundado"',
    answers: [
      { text: '1910', correct: true },
      { text: '1911', correct: false },
      { text: '1953', correct: false },
      { text: '1980', correct: false }
    ]
  },
  {
    question: 'Corinthians foi o unico time de Sp que nao foi rebaixado',
    answers: [
      { text: "Verdadeiro", correct: false },
      { text: "Falso", correct: true }
    ]
  },
  {
    question: 'Qual mascote do Timão',
    answers: [
      { text: 'Aguia', correct: false },
      { text: 'Mosqueteiro', correct: true },
      { text: 'Gaviao', correct: false },
      { text: 'Porco', correct: false }
    ]
  },
  {
    question: 'Quantos brasileiroes o Corinthians tem',
    answers: [
      { text: '5', correct: false },
      { text: '7', correct: true },
      { text: '6', correct: false },
      { text: '9', correct: false }
    ]
  },
  {
    question: 'Qual o maior jogador na historia do corinthians',
    answers: [
      { text: 'Socatres', correct: false },
      { text: 'Neto', correct: false },
      { text: 'Roger guedes', correct: false },
      { text: 'Cassio', correct: true },
    ]
  },
]