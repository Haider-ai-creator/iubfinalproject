document.addEventListener("DOMContentLoaded", () => {
  const quizBtn = document.getElementById("quiz-btn");
  const roleplayBtn = document.getElementById("roleplay-btn");
  const quizContainer = document.getElementById("quiz-container");
  const roleplayContainer = document.getElementById("roleplay-container");
  const questionElement = document.getElementById("question");
  const answersElement = document.getElementById("answers");
  const nextBtn = document.getElementById("next-btn");
  const scenarioElement = document.getElementById("scenario");
  const optionsElement = document.getElementById("options");
  const continueBtn = document.getElementById("continue-btn");

  const quizQuestions = [

    
    {
      question: "What is the safest way to connect to public Wi-Fi?",
      answers: [
        { text: "Use a Virtual Private Network (VPN).", correct: true  },
        { text: "Use public Wi-Fi for financial transactions..", correct: false},
        { text: "Turn off your device's antivirus software.", correct: false },        
        { text:
          "Feedback: A VPN encrypts your internet connection, protecting your data on public networks. Avoid accessing sensitive information without a VPN.", correct: false },  
      ],
    },


    {
      question: "What is the safest way to create a password?",
      answers: [
        { text: "Use your birthdate.", correct: false },
        { text: "Use a combination of letters, numbers, and symbols.", correct: true },
        { text: "Use the word 'password'.", correct: false },
      ],
    },
    {
      question: "What should you do if you receive a phishing email?",
      answers: [
        { text: "Click on the link to see what it says.", correct: false },
        { text: "Delete it and report it as phishing.", correct: true },
        { text: "Reply to the email asking for details.", correct: false },
      ],
    },
    {
      question: "Which of these is a sign of a secure website?",
      answers: [
        { text: "The URL starts with 'http'.", correct: false },
        { text: "The URL starts with 'https' and there’s a padlock icon.", correct: true },
        { text: "The website has colorful graphics.", correct: false },
      ],
    },
  ];

  const roleplayScenarios = [
    {
      scenario: "You receive an email from your bank asking for your account details. What should you do?",
      options: [
        { text: "Reply with your account details.", correct: false },
        { text: "Ignore the email.", correct: false },
        { text: "Contact the bank through their official website or number.", correct: true },
      ],
    },
    {
      scenario: "A stranger asks for access to your work computer, claiming to be IT support. What should you do?",
      options: [
        { text: "Grant access immediately.", correct: false },
        { text: "Verify their identity with your IT department.", correct: true },
        { text: "Ignore them and walk away.", correct: false },
      ],
    },
    {
      scenario: "You find a USB drive in the office parking lot. What should you do?",
      options: [
        { text: "Plug it into your computer to identify the owner.", correct: false },
        { text: "Hand it over to your IT department.", correct: true },
        { text: "Keep it for personal use.", correct: false },
      ],
    },
  ];

  let currentQuizIndex = 0;
  let currentScenarioIndex = 0;

  quizBtn.addEventListener("click", () => {
    quizContainer.classList.remove("hidden");
    roleplayContainer.classList.add("hidden");
    startQuiz();
  });

  roleplayBtn.addEventListener("click", () => {
    quizContainer.classList.add("hidden");
    roleplayContainer.classList.remove("hidden");
    startRoleplay();
  });

  nextBtn.addEventListener("click", () => {
    currentQuizIndex++;
    if (currentQuizIndex < quizQuestions.length) {
      setNextQuestion();
    } else {
    
      quizContainer.classList.add("hidden");
    }
  });

  continueBtn.addEventListener("click", () => {
    currentScenarioIndex++;
    if (currentScenarioIndex < roleplayScenarios.length) {
      setNextScenario();
    } else {
      
      roleplayContainer.classList.add("hidden");
    }
  });

  function startQuiz() {
    currentQuizIndex = 0;
    setNextQuestion();
  }

  function setNextQuestion() {
    resetQuizState();
    const currentQuestion = quizQuestions[currentQuizIndex];
    questionElement.textContent = currentQuestion.question;
    currentQuestion.answers.forEach((answer) => {
      const button = document.createElement("button");
      button.textContent = answer.text;
      button.classList.add("btn");
      if (answer.correct) {
        button.dataset.correct = answer.correct;
      }
      button.addEventListener("click", selectAnswer);
      answersElement.appendChild(button);
    });
  }

  function resetQuizState() {
    nextBtn.classList.add("hidden");
    while (answersElement.firstChild) {
      answersElement.removeChild(answersElement.firstChild);
    }
  }

  function selectAnswer(e) {
    const selectedButton = e.target;
    const correct = selectedButton.dataset.correct === "true";
    Array.from(answersElement.children).forEach((button) => {
      setStatusClass(button, button.dataset.correct === "true");
    });
    if (correct) {
      alert("Correct choice!");
    } else {
      alert("Incorrect choice. Learn and try again!");
    }
    nextBtn.classList.remove("hidden");
  }

  function startRoleplay() {
    currentScenarioIndex = 0;
    setNextScenario();
  }

  function setNextScenario() {
    resetRoleplayState();
    const currentScenario = roleplayScenarios[currentScenarioIndex];
    scenarioElement.textContent = currentScenario.scenario;
    currentScenario.options.forEach((option) => {
      const button = document.createElement("button");
      button.textContent = option.text;
      button.classList.add("btn");
      if (option.correct) {
        button.dataset.correct = option.correct;
      }
      button.addEventListener("click", selectOption);
      optionsElement.appendChild(button);
    });
  }

  function resetRoleplayState() {
    continueBtn.classList.add("hidden");
    while (optionsElement.firstChild) {
      optionsElement.removeChild(optionsElement.firstChild);
    }
  }

  function selectOption(e) {
    const selectedButton = e.target;
    const correct = selectedButton.dataset.correct === "true";
    Array.from(optionsElement.children).forEach((button) => {
      setStatusClass(button, button.dataset.correct === "true");
    });
    if (correct) {
      alert("Correct choice!");
    } else {
      alert("Incorrect choice. Learn and try again!");
    }
    continueBtn.classList.remove("hidden");
  }

  function setStatusClass(element, correct) {
    clearStatusClass(element);
    if (correct) {
      element.classList.add("correct");
    } else {
      element.classList.add("wrong");
    }
  }

  function clearStatusClass(element) {
    element.classList.remove("correct");
    element.classList.remove("wrong");
  }
});

// Teacher's role: Show teacher dashboard
document.getElementById("quiz-btn").addEventListener("click", function() {
  // Hide other sections and show the quiz container for students
  document.getElementById("quiz-container").classList.remove("hidden");
  document.getElementById("roleplay-container").classList.add("hidden");
  document.getElementById("teacher-section").classList.add("hidden");
});

document.getElementById("roleplay-btn").addEventListener("click", function() {
  // Hide other sections and show the role-play container
  document.getElementById("roleplay-container").classList.remove("hidden");
  document.getElementById("quiz-container").classList.add("hidden");
  document.getElementById("teacher-section").classList.add("hidden");
});

// Show teacher dashboard for managing questions
document.getElementById("teacher-section").classList.remove("hidden");

// Handling the "Add Question" feature for the teacher
document.getElementById("add-question-btn").addEventListener("click", function() {
  let questionCount = document.getElementById("question-count").value;
  if (questionCount > 20) questionCount = 20; // Ensure max 10 questions
  
  // Logic to add or update questions based on the count
  // Example logic: Store questions in a simple array or object
  let questionsArray = [];
  for (let i = 0; i < questionCount; i++) {
   
    questionsArray.push({ question, answer });
  }
  console.log("Questions added/updated:", questionsArray);
});

// Handling the "Start Quiz" button for the student
document.getElementById("start-quiz-teacher").addEventListener("click", function() {
  let numQuestions = document.getElementById("question-count").value;
  if (numQuestions > 20) numQuestions = 20; // Ensure no more than 20 questions
 

  // Logic to start the quiz with the added questions
  // Example: Show the first question in the quiz
  let currentQuestion = 0;
  let quizQuestions = []; // This would hold your questions

  // Insert a simple question display for testing
  document.getElementById("quiz-container").classList.remove("hidden");
  document.getElementById("roleplay-container").classList.add("hidden");
  document.getElementById("teacher-section").classList.add("hidden");

  function displayQuestion() {
    if (currentQuestion < quizQuestions.length) {
      let questionData = quizQuestions[currentQuestion];
      document.getElementById("question").innerText = questionData.question;
      // Dynamically add answer options (simplified here)
      let answers = document.getElementById("answers");
      answers.innerHTML = "";
      let answerBtn = document.createElement("button");
      answerBtn.innerText = questionData.answer;
      answers.appendChild(answerBtn);
    } else {
      
    }
  }

  // Initially display the first question
  displayQuestion();

  // Add functionality for "Next" button to show next question
  document.getElementById("next-btn").addEventListener("click", function() {
    currentQuestion++;
    displayQuestion();
  });
});
let questionsArray = []; // This will store the questions added by the teacher

// Handle "Start Quiz" button click
document.getElementById("quiz-btn").addEventListener("click", function() {
  // Hide other sections and show the quiz container for students
  document.getElementById("quiz-container").classList.remove("hidden");
  document.getElementById("roleplay-container").classList.add("hidden");
  document.getElementById("teacher-section").classList.add("hidden");

  // Check if there are questions, if not, alert the teacher to add them
  if (questionsArray.length === 0) {
    
    return;
  }

  // Initialize the quiz with the first question
  currentQuestion = 0;
  displayQuestion();
});

// Handle "Add Question" button click
document.getElementById("add-question-btn").addEventListener("click", function() {
  let questionCount = parseInt(document.getElementById("question-count").value);
  if (questionCount > 20) questionCount = 20; // Limit to 20 questions
  

  // Add or update questions
  for (let i = 0; i < questionCount; i++) {
    let questionText = prompt("Enter question #" + (i + 1));
    let correctAnswer = prompt("Enter the correct answer for question #" + (i + 1));

    // Push question object into the questionsArray
    questionsArray.push({ question: questionText, answer: correctAnswer });
  }

  // Log questions array to check if it's working
  console.log("Questions added/updated:", questionsArray);
});

// Handling the "Start Quiz" button for the teacher
document.getElementById("start-quiz-teacher").addEventListener("click", function() {
  let numQuestions = parseInt(document.getElementById("question-count").value);
  if (numQuestions > 20) numQuestions = 20; // Ensure no more than 20 questions
 

  // Show quiz container and hide teacher section
  document.getElementById("quiz-container").classList.remove("hidden");
  document.getElementById("roleplay-container").classList.add("hidden");
  document.getElementById("teacher-section").classList.add("hidden");

  // Initialize the quiz
  currentQuestion = 0;
  displayQuestion();
});

// Function to display the question
function displayQuestion() {
  if (currentQuestion < questionsArray.length) {
    // Get the current question
    let questionData = questionsArray[currentQuestion];
    document.getElementById("question").innerText = questionData.question;

    // Dynamically add answer buttons
    let answers = document.getElementById("answers");
    answers.innerHTML = ""; // Clear previous answers
    let answerBtn = document.createElement("button");
    answerBtn.innerText = questionData.answer;
    answerBtn.classList.add("btn");
    answers.appendChild(answerBtn);
  } else {
  
  }
}

// Handle the "Next" button click to show the next question
document.getElementById("next-btn").addEventListener("click", function() {
  currentQuestion++;
  displayQuestion();
});

function selectAnswer(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";

  // Highlight the selected answer with correct/incorrect visual feedback
  Array.from(answersElement.children).forEach((button) => {
      setStatusClass(button, button.dataset.correct === "true");
  });

  // Display inline feedback instead of using alerts
  const feedbackElement = document.getElementById("feedback");
  feedbackElement.textContent = correct
      ? "Correct! Well done. 👍"
      : "Incorrect! Review and try again. ❌";
  feedbackElement.classList.remove("hidden");

  // Show the next button to proceed
  nextBtn.classList.remove("hidden");
}

function selectOption(e) {
  const selectedButton = e.target;
  const correct = selectedButton.dataset.correct === "true";

  // Highlight the selected option with correct/incorrect feedback
  Array.from(optionsElement.children).forEach((button) => {
      setStatusClass(button, button.dataset.correct === "true");
  });

  // Display inline feedback for role-play answers
  const feedbackElement = document.getElementById("roleplay-feedback");
  feedbackElement.textContent = correct
      ? "Great choice! You handled this well. 😊"
      : "Not the best choice. Learn and improve! 🚫";
  feedbackElement.classList.remove("hidden");

  // Enable the continue button
  continueBtn.classList.remove("hidden");
}

// Status management with visual cues
function setStatusClass(element, correct) {
  clearStatusClass(element);
  if (correct) {
      element.classList.add("correct");
  } else {
      element.classList.add("wrong");
  }
}

function clearStatusClass(element) {
  element.classList.remove("correct");
  element.classList.remove("wrong");
}

// Reset feedback visibility when moving to the next question/scenario
function resetQuizState() {
  nextBtn.classList.add("hidden");
  const feedbackElement = document.getElementById("feedback");
  feedbackElement.classList.add("hidden");
  feedbackElement.textContent = "";
  while (answersElement.firstChild) {
      answersElement.removeChild(answersElement.firstChild);
  }
}

function resetRoleplayState() {
  continueBtn.classList.add("hidden");
  const feedbackElement = document.getElementById("roleplay-feedback");
  feedbackElement.classList.add("hidden");
  feedbackElement.textContent = "";
  while (optionsElement.firstChild) {
      optionsElement.removeChild(optionsElement.firstChild);
  }
}

