const PROXY = "https://cors-anywhere.herokuapp.com/";
const API_URL = "https://api.jdoodle.com/v1/execute";
const CLIENT_ID = "e7024480696e79a6e8866ff00654532d"; 
const CLIENT_SECRET = "74708248fb36b51955df12af908c36ddb308aa257a282b7f5d98b23106636a80";
const API_VERSION = "3";
const X_CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
let inputContainer;
let outputContainer;
let runBtn;
let levelLanguage;
let code = "";
let input = "";
let output;
let answer;
let language;
let noteBtn;
let noteList;
let levelId;
let courseId;
let successAlert;
let dangerAlert;
let continueBtn;

export function loadLevelPage(){
    levelId = document.querySelector('#levelId').value;
    courseId = document.querySelector('#courseId').value;

    noteBtn = document.querySelector('.note-button');
    noteList = document.querySelector('.note-list');
    successAlert = document.querySelector('#successAlert');
    dangerAlert = document.querySelector('#dangerAlert');
    continueBtn = document.querySelector('#btn-level-boss-continue');
    continueBtn.href = `/course/${courseId}`;
    if (noteBtn != null){
        noteBtn.addEventListener('click', ()=>{
            noteList.classList.toggle('d-none');
        });
    }

    inputContainer = document.querySelector('#level-boss-input');
    outputContainer = document.querySelector('#level-boss-output');
    levelLanguage = document.querySelector('#levelLanguage').value;
    runBtn = document.querySelector('.level-boss-run-btn');
    setLanguage(levelLanguage);

    if (inputContainer != null){
        inputContainer.addEventListener('keydown', function (e){
            if (e.key == 'Tab') {
                e.preventDefault();
                var start = this.selectionStart;
                var end = this.selectionEnd;
                this.value = this.value.substring(0, start) +
                "\t" + this.value.substring(end);
                this.selectionStart = 
                this.selectionEnd = start + 1;
            }
        });
        inputContainer.addEventListener('keyup', function (e){
            code = e.target.value;
        });
    }
    
    if (runBtn != null){
        runBtn.addEventListener('click', async ()=>{
            await getAnswerInput();
    
            await execute();
            outputContainer.textContent = output;
            showResult();
        }); 
    }
    
}

function showResult(){
    if (output == answer){
        successAlert.classList.remove('d-none');
        continueBtn.classList.remove('d-none');
        dangerAlert.classList.add('d-none');
        runBtn.remove();
        
        //[WIP] tunggu flow ke dia biar ga rusak
        saveProgress(); 
    }
    else{
        successAlert.classList.add('d-none');
        continueBtn.classList.add('d-none');
        dangerAlert.classList.remove('d-none');
    }
}

function setLanguage(levelLanguage){
    if (levelLanguage == "Python") language = 'python3';
    else language = levelLanguage.toLowerCase();
}

async function saveProgress(){
    try{
        const response = await fetch(`/level/saveProgress/${levelId}/${courseId}`, {
            method: 'GET',
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": X_CSRF_TOKEN,
            }
        });
        if(!response.ok){
            throw new Error(`Response status: ${response.status}`);
        }
        const result = await response.json();
        console.log(result)
    }
    catch(error){
        console.log(error);
    }
}

async function execute(){
    let data = {
        clientId: CLIENT_ID,
        clientSecret: CLIENT_SECRET,
        script: code,
        stdin: input,
        language: language,
        versionIndex: API_VERSION,
        compileOnly: false,
      };
    try{
        const response = await fetch(PROXY + API_URL, {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": X_CSRF_TOKEN,
            },
        })
        if (!response.ok){
            throw new Error(`Response status: ${response.status}`);
        }
        const result = await response.json();
        output = result.output;
    }
    catch(error){
        console.log(error);
    }
}

async function getAnswerInput(){
    try{
        const response = await fetch(`/level/answer/${levelId}`, {
            method: 'GET',
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": X_CSRF_TOKEN,
            }
        });
        if(!response.ok){
            throw new Error(`Response status: ${response.status}`);
        }
        const result = await response.json();
        answer = result.answer.replace(/\\n/g, "\n");
        input = result.input.replace(/\\n/g, "\n");
    }
    catch(error){
        console.log(error);
    }
}