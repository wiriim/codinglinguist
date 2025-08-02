const categories = document.querySelectorAll(".category-container");
const categoryTypes = document.querySelectorAll(".category-type-container");
const card = document.querySelectorAll(".card");

card.forEach(e => {
    if(e.dataset.category == 1){
        e.style.borderLeft = "8px solid #00599C";
    }
    else if(e.dataset.category == 2){
        e.style.borderLeft = "8px solid #FAC40C";
    }
    else if(e.dataset.category == 3){
        e.style.borderLeft = "8px solid #F39319";
    }
});

categories.forEach(e =>{
    if(e.dataset.category == 1){
        e.style.backgroundColor = "#00599C";
    }
    else if(e.dataset.category == 2){
        e.style.backgroundColor = "#FAC40C";
    }
    else if(e.dataset.category == 3){
        e.style.backgroundColor = "#F39319";
    }
});

categoryTypes.forEach(e =>{
    if(e.dataset.categorytype == 1){
        e.style.backgroundColor = "#C70000";
    }
    else if(e.dataset.categorytype == 2){
        e.style.backgroundColor = "#9B59B6";
    }
    else if(e.dataset.categorytype == 3){
        e.style.backgroundColor = "#7292E4";
    }
    else if(e.dataset.categorytype == 4){
        e.style.backgroundColor = "#2ECC71";
    }
    else if(e.dataset.categorytype == 5){
        e.style.backgroundColor = "#000000";
    }
});