let postsBtn = document.querySelector('#posts-btn');
let progressBtn = document.querySelector('#progress-btn');
let postsContainer = document.querySelector('.profile-posts-container');
let progressContainer = document.querySelector('.progress-container');
let profilePosts = document.querySelectorAll('.profile-post-img');
let profileBadge = document.querySelectorAll('.profile-badge');

export function loadProfilePage(){
    postsBtn.addEventListener('click', ()=>{
        enablePosts();
    });

    progressBtn.addEventListener('click', ()=>{
        enableProgress();
    });

    function enablePosts(){
        postsBtn.classList.add('active');
        postsBtn.classList.add('posts-link');
        progressBtn.classList.remove('active');
        progressBtn.classList.remove('progress-link');
        postsContainer.classList.remove('d-none');
        progressContainer.classList.add('d-none');
    }
    
    function enableProgress(){
        postsBtn.classList.remove('active');
        postsBtn.classList.remove('posts-link');
        progressBtn.classList.add('active');
        progressBtn.classList.add('progress-link');
        postsContainer.classList.add('d-none');
        progressContainer.classList.remove('d-none');
    }

    profilePosts.forEach(e => {
        if (e.dataset.category == 1){
            e.src = "/images/C_Programming_Language.png";
            e.width = 55;
        } 
        else if (e.dataset.category == 2){
            e.src = "/images/Java_programming_language_logo.png";
            e.width = 38;
        } 
        else if (e.dataset.category == 3) e.src = "/images/Python.png";
    });

    profileBadge.forEach(e => {
        if (e.dataset.badgeName == 'c_clear') e.src = "/images/c_badge.png";
        else if (e.dataset.badgeName == 'python_clear') e.src = "/images/python_badge.png";
        else if (e.dataset.badgeName == 'java_clear') e.src = "/images/java_badge.png";
        else if (e.dataset.badgeName == 'all_clear') e.src = "/images/trophy_badge.png";
        else if (e.dataset.badgeName == '100_point') e.src = "/images/100_badge.png";
        else if (e.dataset.badgeName == '300_point') e.src = "/images/300_badge.png";
        else if (e.dataset.badgeName == '500_point') e.src = "/images/500_badge.png";
        else if (e.dataset.badgeName == 'first_place') e.src = "/images/medalGold.png";
        else if (e.dataset.badgeName == 'second_place') e.src = "/images/medalSilver.png";
        else if (e.dataset.badgeName == 'third_place') e.src = "/images/medalBronze.png";
        else if (e.dataset.badgeName == 'complete_level') e.src = "/images/rocket.png";
        else if (e.dataset.badgeName == 'create_forum') e.src = "/images/forum_badge.png";
    });
}
