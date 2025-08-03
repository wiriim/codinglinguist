const categories = document.querySelectorAll(".category-container");
const categoryTypes = document.querySelectorAll(".category-type-container");
const card = document.querySelectorAll(".card");
let postLikeBtns = document.querySelectorAll(".post-like-btn");
let postDislikeBtns = document.querySelectorAll(".post-dislike-btn");

card.forEach((e) => {
    if (e.dataset.category == 1) {
        e.style.borderLeft = "8px solid #00599C";
    } else if (e.dataset.category == 2) {
        e.style.borderLeft = "8px solid #FAC40C";
    } else if (e.dataset.category == 3) {
        e.style.borderLeft = "8px solid #F39319";
    }
});

categories.forEach((e) => {
    if (e.dataset.category == 1) {
        e.style.backgroundColor = "#00599C";
    } else if (e.dataset.category == 2) {
        e.style.backgroundColor = "#FAC40C";
    } else if (e.dataset.category == 3) {
        e.style.backgroundColor = "#F39319";
    }
});

categoryTypes.forEach((e) => {
    if (e.dataset.categorytype == 1) {
        e.style.backgroundColor = "#C70000";
    } else if (e.dataset.categorytype == 2) {
        e.style.backgroundColor = "#9B59B6";
    } else if (e.dataset.categorytype == 3) {
        e.style.backgroundColor = "#7292E4";
    } else if (e.dataset.categorytype == 4) {
        e.style.backgroundColor = "#2ECC71";
    } else if (e.dataset.categorytype == 5) {
        e.style.backgroundColor = "#000000";
    }
});

postLikeBtns.forEach((element) => {
    element.addEventListener("click", async function eventHandler() {
        let likes = await likePost(element.dataset.postId);
        toggleDislike(element, likes);
        element.removeEventListener("click", eventHandler);
    });
});
postDislikeBtns.forEach((element) => {
    element.addEventListener("click", async function eventHandler() {
        let likes = await dislikePost(element.dataset.postId);
        toggleLike(element, likes);
        element.removeEventListener("click", eventHandler);
    });
});

async function likePost(postId) {
    const url = `/posts/like/${postId}`;
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
        let likes = await dislikePost(element.dataset.postId);
        toggleLike(element, likes);
        element.removeEventListener("click", eventHandler);
    });
}

async function dislikePost(postId) {
    const url = `/posts/dislike/${postId}`;
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
        let likes = await likePost(element.dataset.postId);
        toggleDislike(element, likes);
        element.removeEventListener("click", eventHandler);
    });
}

function toggleHeart(e) {
    if (e.classList.contains("bi-heart-fill")) {
        e.classList.remove("bi-heart-fill");
        e.classList.remove("text-danger");
        e.classList.add("bi-heart");
        e.classList.remove("post-dislike-btn");
        e.classList.add("post-like-btn");
    } else {
        e.classList.add("bi-heart-fill");
        e.classList.add("text-danger");
        e.classList.remove("bi-heart");
        e.classList.add("post-dislike-btn");
        e.classList.remove("post-like-btn");
    }
}
