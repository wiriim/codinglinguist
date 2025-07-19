const levels = document.querySelectorAll('.level');
levels.forEach(e => {
    if (e.dataset.number == 2 || e.dataset.number == 12 || e.dataset.number == 14 || e.dataset.number == 4) e.parentElement.style.marginRight = '150px';
    else if (e.dataset.number == 3 || e.dataset.number == 13) e.parentElement.style.marginRight = '300px';
    else if (e.dataset.number == 6 || e.dataset.number == 17 || e.dataset.number == 8 || e.dataset.number == 19) e.parentElement.style.marginLeft = '150px';
    else if (e.dataset.number == 7 || e.dataset.number == 18) e.parentElement.style.marginLeft = '300px';
    else if (e.dataset.number == 10 || e.dataset.number == 15 || e.dataset.number == 20) {e.textContent = ""; e.classList.toggle("level-boss")};
});