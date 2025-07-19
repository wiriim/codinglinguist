let answer = "";
let btnQuestionSubmit = document.querySelector("#btnQuestionSubmit");
let btnQuestionContinue = document.querySelector("#btnQuestionContinue");
let questionChoices = document.querySelectorAll(".question-choice");
let questionChoice = "";
let questionInput = document.querySelector(".question-input");
let multipleChoice = questionChoices.length > 0;
let courseId = document.querySelector("#courseId").value;
let levelId = document.querySelector("#levelId").value;
let questionId = document.querySelector("#questionId").value;
let successAlert = document.querySelector("#successAlert");
let dangerAlert = document.querySelector("#dangerAlert");

if (multipleChoice) {
    questionChoices.forEach((element) => {
        element.addEventListener("click", updateQuestionChoice);
    });

    function updateQuestionChoice(event) {
        let element = event.target;

        questionChoices.forEach((element) => {
            element.classList.remove("selected");
        });

        element.classList.add("selected");
        questionChoice = element.textContent;
        updateAnswer(questionChoice);
    }
} else {
    questionInput.addEventListener("keyup", (e) => {
        updateAnswer(e.target.value);
    });
}

function updateAnswer(value) {
    answer = value;
}

btnQuestionSubmit.addEventListener("click", (e) => {
    submitAnswer(answer);
});

async function submitAnswer(answer) {
    const url = `/course/${courseId}/level/${levelId}/question/${questionId}`;
    try {
        const response = await fetch(url, {
            method: "POST",
            body: JSON.stringify({ answer: answer }),
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
                "Content-Type": "application/json",
            },
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }

        const result = await response.json();
        if (result.success) {
            showSuccess();
        } else {
            showFail();
        }
        console.log(result);
    } catch (error) {
        console.error(error.message);
    }
}

function showSuccess(){
  successAlert.classList.remove("d-none");
  dangerAlert.classList.add("d-none");

  questionId = parseInt(questionId) + 1;
  if (questionId % 4 == 1)  btnQuestionContinue.href = `/course/${courseId}`;
  else btnQuestionContinue.href = `/course/${courseId}/level/${levelId}/question/${questionId}`;
  
  btnQuestionContinue.classList.remove('d-none');
  btnQuestionSubmit.classList.add('d-none');
}

function showFail(){
  successAlert.classList.add("d-none");
  dangerAlert.classList.remove("d-none");
}
