let postsBtn = document.querySelector('#posts-btn');
let progressBtn = document.querySelector('#progress-btn');
let postsContainer = document.querySelector('.profile-posts-container');
let progressContainer = document.querySelector('.progress-container');
let profilePosts = document.querySelectorAll('.profile-post-img');

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
            e.src = "/images/Java_Programming_Language_logo.png";
            e.width = 38;
        } 
        else if (e.dataset.category == 3) e.src = "/images/Python.png";
    });
}
