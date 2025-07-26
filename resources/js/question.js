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
let questionFinished = document.querySelector("#questionFinished");
let questionIsNotFinished = questionFinished == null || questionFinished.value == false;
let questionIsFinished = questionFinished != null && questionFinished.value == true;
let questionAnswer = document.querySelector("#questionAnswer");

document.addEventListener("DOMContentLoaded", function () {
    if (multipleChoice) {
        questionChoices.forEach((element) => {
            element.addEventListener("click", updateQuestionChoice);
        });
    } else {
        questionInput.addEventListener("keyup", (e) => {
            updateAnswer(e.target.value);
        });
    }

    setBtnQuestionContinue();

    if (questionIsNotFinished) {
        btnQuestionSubmit.addEventListener("click", (e) => {
            submitAnswer(answer);
        });
    } else if (questionIsFinished) {
        showSuccess();
        if (multipleChoice) {
            questionChoices.forEach((element) => {
                if (element.textContent == questionAnswer.value) element.classList.add('correct');
            });
        }
        else{
            questionInput.placeholder = questionAnswer.value;
            questionInput.value = questionAnswer.value;
        }
    }
});

function updateQuestionChoice(event) {
    let element = event.target;

    questionChoices.forEach((element) => {
        element.classList.remove("selected");
    });+

    element.classList.add("selected");
    questionChoice = element.textContent;
    updateAnswer(questionChoice);
}

function updateAnswer(value) {
    answer = value;
}

async function submitAnswer(answer) {
    const url = `/course/${courseId}/level/${levelId}/question/${questionId}`;
    console.log(url)
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
        console.log(result)
        if (result.success) {
            showSuccess();
        } else {
            showFail();
        }
    } catch (error) {
        console.error(error.message);
    }
}

function showSuccess() {
    successAlert.classList.remove("d-none");
    dangerAlert.classList.add("d-none");
    btnQuestionContinue.classList.remove("d-none");

    if (questionIsNotFinished) {
        btnQuestionSubmit.classList.add("d-none");
    }
}

function showFail() {
    successAlert.classList.add("d-none");
    dangerAlert.classList.remove("d-none");
}

function setBtnQuestionContinue() {
    let nextQuestionId = parseInt(questionId) + 1;
    if (nextQuestionId % 4 == 1)
        btnQuestionContinue.href = `/course/${courseId}`;
    else
        btnQuestionContinue.href = `/course/${courseId}/level/${levelId}/question/${nextQuestionId}`;
}
