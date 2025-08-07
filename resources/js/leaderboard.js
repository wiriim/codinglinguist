const urlParams = new URLSearchParams(window.location.search);
let page = urlParams.get('page');
let leaderboardNo;
let number;
export function loadLeaderboardPage(){
    leaderboardNo = document.querySelectorAll('.leaderboard-no');
    if (page == null || page == 1){
        number = 1;
    }
    else{
        number = page * 10 - 10 + 1;    
    }

    leaderboardNo.forEach(e => {
        let img = document.createElement('img');
        img.width = 50;
        if (number == 1){
            img.src = './images/medalGold.png';
            e.appendChild(img);
            number++;
        }
        else if (number == 2){
            img.src = './images/medalSilver.png';
            e.appendChild(img);
            number++;
        }
        else if (number == 3){
            img.src = './images/medalBronze.png';
            e.appendChild(img);
            number++;
        }
        else{
            e.textContent = number++;
        }
    });
}

