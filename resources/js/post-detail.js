let commentLikeBtns = document.querySelectorAll(".comment-like-btn");
let commentDislikeBtns = document.querySelectorAll(".comment-dislike-btn");
let commentReplyBtns = document.querySelectorAll(".comment-reply-btn");
let replyContainer = document.querySelectorAll('.reply-container');
let saveReplyBtn = document.querySelectorAll('.reply-save');
let cancelReplyBtn = document.querySelectorAll('.reply-cancel');
let replyInputContainer = document.querySelectorAll('.reply');
let replyContent;
let viewRepliesBtn = document.querySelectorAll('.view-reply');
let repliesContainer = document.querySelectorAll('.replies-container');
let replyReplyBtns = document.querySelectorAll('.reply-reply-btn');
let replyContentTextarea = document.querySelectorAll('.comment-reply-content');
let newReplyId;
let newCreatedAt;
let username;
let replyLikeBtns = document.querySelectorAll(".reply-like-btn");
let replyDislikeBtns = document.querySelectorAll(".reply-dislike-btn");
let commentFilterSelect = document.querySelector('.comment-filter');

export function loadPostDetailPage(){
    username = document.querySelector('#username').value;

    commentFilterSelect.addEventListener('change', (e)=>{
        window.location.href = `/posts/${commentFilterSelect.dataset.postId}/comment/${e.target.value}`;
    });

    // Comment & Reply- Like dislike stuff
    commentLikeBtns.forEach((element) => {
        element.addEventListener("click", async function eventHandler() {
            let likes = await likeComment(element.dataset.commentId);
            toggleDislike(element, likes);
            element.removeEventListener("click", eventHandler);
        });
    });
    commentDislikeBtns.forEach((element) => {
        element.addEventListener("click", async function eventHandler() {
            let likes = await dislikeComment(element.dataset.commentId);
            toggleLike(element, likes);
            element.removeEventListener("click", eventHandler);
        });
    });

    replyLikeBtns.forEach((element) => {
        element.addEventListener("click", async function eventHandler() {
            let likes = await likeReply(element.dataset.replyId);
            toggleDislikeReply(element, likes);
            element.removeEventListener("click", eventHandler);
        });
    });
    replyDislikeBtns.forEach((element) => {
        element.addEventListener("click", async function eventHandler() {
            let likes = await dislikeReply(element.dataset.replyId);
            toggleLikeReply(element, likes);
            element.removeEventListener("click", eventHandler);
        });
    });

    // Comment -> Reply stuff
    commentReplyBtns.forEach((element) => {
        element.addEventListener("click", ()=>{
            toggleReplyContainer(element.dataset.commentId);
        });
    });

    // Reply -> Reply stuff
    refreshReplyBtns();
    repliesContainer.forEach((e)=>{
        e.classList.add('d-none');
    });

    viewRepliesBtn.forEach((element) => {
        element.addEventListener("click", ()=>{
            element.nextElementSibling.classList.toggle('d-none'); 
            if(element.textContent.slice(-1) == "v") element.textContent = element.textContent.slice(0, -1) + 'ʌ';
            else element.textContent = element.textContent.slice(0, -1) + 'v';
        });
    });
}

function updateReplyCount(commentId, replyId = null){
    commentReplyBtns.forEach(element => {
        if (element.dataset.commentId == commentId && element.replyId == replyId){
            let oldCount = parseInt(element.nextElementSibling.textContent);
            let viewReply = element.parentElement.parentElement.parentElement.nextElementSibling;
            if (oldCount == 0) viewReply.classList.remove('d-none');
            let newCount = oldCount + 1;
            element.nextElementSibling.textContent = newCount;
            viewReply.textContent = `View Reply (${newCount}) v`;

            let repliesContainer = viewReply.nextElementSibling;
            if(repliesContainer.classList.contains('d-none')){
                repliesContainer.classList.toggle('d-none'); 
                if(viewReply.textContent.slice(-1) == "v") viewReply.textContent = viewReply.textContent.slice(0, -1) + 'ʌ';
                else viewReply.textContent = viewReply.textContent.slice(0, -1) + 'v';
            }
        }
    });
}

function refreshReplyBtns(){
    replyContentTextarea = document.querySelectorAll('.comment-reply-content');
    replyContentTextarea.forEach((e)=>{
        e.style.height = "";
        e.style.height = e.scrollHeight + "px";

        let textContent = e.textContent;
        if (textContent.includes(`@${username}`)) {
            e.classList.add('text-primary', 'fw-semibold');
        }
    });

    replyInputContainer = document.querySelectorAll('.reply');
    replyContainer = document.querySelectorAll('.reply-container');
    replyReplyBtns = document.querySelectorAll('.reply-reply-btn');
    saveReplyBtn = document.querySelectorAll('.reply-save');
    cancelReplyBtn = document.querySelectorAll('.reply-cancel');
    replyReplyBtns.forEach((element) => {
        if (element.onclick == null) {
            element.onclick = function eventHandler() {
                toggleReplyContainer(element.dataset.commentId, element.dataset.replyId);
            }
        }
    });
    saveReplyBtn.forEach((element) => {
        if (element.onclick == null) {
            element.onclick = function eventHandler() {
                saveReply(element.dataset.commentId, element.dataset.replyId);
            }
        }
    });

    cancelReplyBtn.forEach((element) => {
        if (element.onclick == null) {
            element.onclick = function eventHandler() {
                toggleReplyContainer(-1);
            }
        }
    });
}

// Reply - Reply stuff
async function saveReply(commentId, replyId){
    getReplyContent(commentId, replyId);
    await createReply(commentId);
    updateReplyCount(commentId, replyId);
    toggleReplyContainer(commentId, replyId); // perlu update reply count juga ntar 
    appendNewReply(commentId, newReplyId, newCreatedAt);
}

function getReplyContent(commentId, replyId = null){
    replyInputContainer.forEach((element) => {
        if (element.dataset.commentId == commentId && element.dataset.replyId == replyId){
            replyContent = element.value;
        }
    });
}

async function createReply(commentId){
    try{
        const response = await fetch(`/posts/reply/${commentId}`, {
            method: 'POST',
            body: JSON.stringify({content: replyContent}),
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            }
        });
        if (!response.ok){
            throw new Error (`Response status: ${response.status}`);
        }
        const result = await response.json();
        newReplyId = result.replyId;
        newCreatedAt = result.createdAt;
    }
    catch(error){
        console.log(error);
    }
}

// Comment/Reply - stuff
function toggleReplyContainer(commentId, replyId = null){
    replyContainer.forEach((element) => {
        if(element.dataset.commentId == commentId && element.classList.contains('d-none') == false && element.dataset.replyId == replyId){
            element.classList.add('d-none');
        }
        else if (element.dataset.commentId == commentId && element.dataset.replyId == replyId){
            element.classList.remove('d-none');
            
            let textarea = element.children[0];
            let replyToName = element.parentElement.previousElementSibling.previousElementSibling.children[0].textContent;
            if (replyId != null) textarea.value = `@${replyToName}\n`;
            element.children[0].focus();
        }
        else{
            element.classList.add('d-none');
        }
    });
}

function appendNewReply(commentId, replyId, createdAt){ // dapet replyId + createdAt dari response save
    repliesContainer.forEach((element)=>{
        if (element.dataset.commentId == commentId){
            drawNewReply(element, commentId, replyId, createdAt);
        }
    });
    refreshReplyBtns();
}

function drawNewReply(repliesContainer, commentId, replyId, createdAt){
    let replyWrapper = document.createElement('div');
    replyWrapper.classList.add('reply-wrapper');

    let usernameWrapper = document.createElement('div');
    usernameWrapper.classList.add('d-flex', 'gap-2', 'align-items-center', 'justify-content-between', 'mt-2');
    let usernameDiv = document.createElement('p');
    usernameDiv.classList.add('fs-5');
    usernameDiv.textContent = username;
    let cardLinkTrash = document.createElement('a');
    cardLinkTrash.href = `/posts/reply/delete/${replyId}`
    cardLinkTrash.classList.add('card-link');
    let biTrash = document.createElement('i');
    biTrash.classList.add('bi', 'bi-trash');
    cardLinkTrash.append(biTrash);
    usernameWrapper.append(usernameDiv, cardLinkTrash)

    let replyContentDiv = document.createElement('textarea');
    replyContentDiv.classList.add('mt-1', 'comment-reply-content');
    replyContentDiv.disabled = true;
    replyContentDiv.textContent = replyContent;

    let replyBtnContainerWrapper = document.createElement('div');
    replyBtnContainerWrapper.classList.add('d-flex', 'mt-2', 'flex-column');

    let replyBtnContainer = document.createElement('div');
    replyBtnContainer.classList.add('reply-btn-container', 'd-flex', 'gap-3');
    let cardLinkLikes = document.createElement('a');
    cardLinkLikes.classList.add('card-link','d-flex', 'justify-content-center', 'gap-1', 'reply-like');
    let biHeart = document.createElement('i');
    biHeart.classList.add('bi', 'bi-heart', 'reply-like-btn');
    biHeart.dataset.commentId = commentId;
    biHeart.dataset.replyId = replyId;
    let likeCount = document.createElement('span');
    likeCount.classList.add('like-count');
    likeCount.textContent = 0;
    cardLinkLikes.append(biHeart, likeCount);
    let cardLinkReply = document.createElement('a');
    cardLinkReply.classList.add('card-link','d-flex', 'justify-content-center', 'gap-1');
    let biChat = document.createElement('i');
    biChat.classList.add('bi', 'bi-chat', 'reply-reply-btn');
    biChat.dataset.commentId = commentId;
    biChat.dataset.replyId = replyId;
    cardLinkReply.append(biChat);
    let createdAtContainer = document.createElement('p');
    createdAtContainer.textContent = createdAt;
    replyBtnContainer.append(cardLinkLikes, cardLinkReply, createdAtContainer);

    let replyContainer = document.createElement('div');
    replyContainer.classList.add('reply-container', 'd-flex', 'flex-column', 'mt-2', 'd-none');
    replyContainer.dataset.commentId = commentId;
    replyContainer.dataset.replyId = replyId;

    let reply = document.createElement('textarea');
    reply.classList.add('p-2', 'reply');
    reply.rows = 5;
    reply.name = 'reply';
    reply.dataset.commentId = commentId;
    reply.dataset.replyId = replyId;

    let saveCancelWrapper = document.createElement('div');
    saveCancelWrapper.classList.add('d-flex', 'gap-3', 'justify-content-end', 'mt-2');
    let replyCancel = document.createElement('button');
    replyCancel.classList.add('btn', 'btn-cancel', 'reply-cancel');
    replyCancel.type = "button";
    replyCancel.textContent = "Cancel";
    let replySave = document.createElement('button');
    replySave.classList.add('btn', 'btn-post', 'reply-save');
    replySave.type = "button";
    replySave.textContent = "Save";
    replySave.dataset.commentId = commentId;
    replySave.dataset.replyId = replyId;
    saveCancelWrapper.append(replyCancel, replySave);
    replyContainer.append(reply, saveCancelWrapper);
    replyBtnContainerWrapper.append(replyBtnContainer, replyContainer);

    replyWrapper.append(usernameWrapper, replyContentDiv, replyBtnContainerWrapper);
    repliesContainer.append(replyWrapper);
}
// Comment Like / Dislike Stuff
async function likeComment(commentId) {
    const url = `/posts/comment/like/${commentId}`;
    try {
        const response = await fetch(url, {
            method: "GET",
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }

        const result = await response.json();
        return result.likes;
    } catch (error) {
        console.log(error);
    }
}

function toggleDislike(element, likes) {
    toggleHeart(element);
    element.nextElementSibling.textContent = likes;
    element.addEventListener("click", async function eventHandler() {
        let likes = await dislikeComment(element.dataset.commentId);
        toggleLike(element, likes);
        element.removeEventListener("click", eventHandler);
    });
}

async function dislikeComment(commentId) {
    const url = `/posts/comment/dislike/${commentId}`;
    try {
        const response = await fetch(url, {
            method: "GET",
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }

        const result = await response.json();
        if (result.success) {
        } else {
            console.error("Problem with the server");
        }
        return result.likes;
    } catch (error) {
        console.log(error);
    }
}

function toggleLike(element, likes) {
    toggleHeart(element);
    element.nextElementSibling.textContent = likes;
    element.addEventListener("click", async function eventHandler() {
        let likes = await likeComment(element.dataset.commentId);
        toggleDislike(element, likes);
        element.removeEventListener("click", eventHandler);
    });
}

function toggleHeart(e) {
    if (e.classList.contains("bi-heart-fill")) {
        e.classList.remove("bi-heart-fill");
        e.classList.remove("text-danger");
        e.classList.add("bi-heart");
        e.classList.remove("comment-dislike-btn");
        e.classList.add("comment-like-btn");
    } else {
        e.classList.add("bi-heart-fill");
        e.classList.add("text-danger");
        e.classList.remove("bi-heart");
        e.classList.add("comment-dislike-btn");
        e.classList.remove("comment-like-btn");
    }
}

// Reply Like / Dislike Stuff
async function likeReply(replyId) {
    const url = `/posts/reply/like/${replyId}`;
    try {
        const response = await fetch(url, {
            method: "GET",
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }

        const result = await response.json();
        return result.likes;
    } catch (error) {
        console.log(error);
    }
}

function toggleDislikeReply(element, likes) {
    toggleHeart(element);
    element.nextElementSibling.textContent = likes;
    element.addEventListener("click", async function eventHandler() {
        let likes = await dislikeReply(element.dataset.replyId);
        toggleLikeReply(element, likes);
        element.removeEventListener("click", eventHandler);
    });
}

async function dislikeReply(replyId) {
    const url = `/posts/reply/dislike/${replyId}`;
    try {
        const response = await fetch(url, {
            method: "GET",
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }

        const result = await response.json();
        if (result.success) {
        } else {
            console.error("Problem with the server");
        }
        return result.likes;
    } catch (error) {
        console.log(error);
    }
}

function toggleLikeReply(element, likes) {
    toggleHeart(element);
    element.nextElementSibling.textContent = likes;
    element.addEventListener("click", async function eventHandler() {
        let likes = await likeReply(element.dataset.replyId);
        toggleDislikeReply(element, likes);
        element.removeEventListener("click", eventHandler);
    });
}

function toggleHeartReply(e) {
    if (e.classList.contains("bi-heart-fill")) {
        e.classList.remove("bi-heart-fill");
        e.classList.remove("text-danger");
        e.classList.add("bi-heart");
        e.classList.remove("reply-dislike-btn");
        e.classList.add("reply-like-btn");
    } else {
        e.classList.add("bi-heart-fill");
        e.classList.add("text-danger");
        e.classList.remove("bi-heart");
        e.classList.add("reply-dislike-btn");
        e.classList.remove("reply-like-btn");
    }
}