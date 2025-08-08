let commentLikeBtns = document.querySelectorAll(".comment-like-btn");
let commentDislikeBtns = document.querySelectorAll(".comment-dislike-btn");

export function loadPostDetailPage(){
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
}