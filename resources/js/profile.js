let postsBtn = document.querySelector('#posts-btn');
let progressBtn = document.querySelector('#progress-btn');
let postsContainer = document.querySelector('.profile-posts-container');
let progressContainer = document.querySelector('.progress-container');

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
}
