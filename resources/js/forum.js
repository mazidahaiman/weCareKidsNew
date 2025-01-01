// DOM Elements
const postsFeed = document.getElementById('postsFeed');
const createPostButton = document.getElementById('createPostButton');
const postContentInput = document.getElementById('postContent');

// Create Post
createPostButton.addEventListener('click', () => {
    const postContent = postContentInput.value.trim();

    if (postContent) {
        // Create new post HTML
        const postId = new Date().getTime(); // Simulate unique ID
        const newPost = `
            <div class="post" data-post-id="${postId}">
                <div class="post-header">
                    <img src="https://via.placeholder.com/50" alt="User Avatar" class="user-avatar">
                    <p class="user-name">You</p>
                </div>
                <div class="post-content">
                    <p>${postContent}</p>
                </div>
                <div class="post-actions">
                    <button class="like-button" data-post-id="${postId}">❤️ <span class="like-count">0</span></button>
                    <button class="comment-toggle-button" data-post-id="${postId}">💬 <span class="comment-count">0</span></button>
                </div>
                <div class="post-comments" data-post-id="${postId}" style="display: none;"></div>
                <div class="add-comment">
                    <input type="text" class="comment-input" data-post-id="${postId}" placeholder="Add a comment...">
                    <button class="post-comment-button" data-post-id="${postId}">Post</button>
                </div>
            </div>
        `;

        // Append new post
        postsFeed.insertAdjacentHTML('afterbegin', newPost);
        postContentInput.value = '';
    }
});

// Like Post
postsFeed.addEventListener('click', (e) => {
    if (e.target.classList.contains('like-button')) {
        const likeButton = e.target;
        const likeCountSpan = likeButton.querySelector('.like-count');
        let currentLikes = parseInt(likeCountSpan.innerText);

        // Toggle like
        likeButton.classList.toggle('liked');
        currentLikes = likeButton.classList.contains('liked') ? currentLikes + 1 : currentLikes - 1;

        likeCountSpan.innerText = currentLikes;
    }
});

// Add Comment
postsFeed.addEventListener('click', (e) => {
    if (e.target.classList.contains('post-comment-button')) {
        const postId = e.target.getAttribute('data-post-id');
        const commentInput = document.querySelector(`.comment-input[data-post-id="${postId}"]`);
        const commentText = commentInput.value.trim();

        if (commentText) {
            const postComments = document.querySelector(`.post-comments[data-post-id="${postId}"]`);
            const newComment = `<div class="comment"><strong>You:</strong> ${commentText}</div>`;

            postComments.insertAdjacentHTML('beforeend', newComment);
            postComments.style.display = 'block';
            commentInput.value = '';
        }
    }
});

// Toggle Comments
postsFeed.addEventListener('click', (e) => {
    if (e.target.classList.contains('comment-toggle-button')) {
        const postId = e.target.getAttribute('data-post-id');
        const postComments = document.querySelector(`.post-comments[data-post-id="${postId}"]`);
        postComments.style.display = postComments.style.display === 'none' ? 'block' : 'none';
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const postsFeed = document.getElementById('postsFeed');
    const createPostButton = document.getElementById('createPostButton');
    const postContentInput = document.getElementById('postContent');

    // Create Post
    createPostButton.addEventListener('click', () => {
        const postContent = postContentInput.value.trim();

        if (postContent) {
            fetch('/api/posts', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ content: postContent }),
            })
                .then(response => response.json())
                .then(post => {
                    const newPostHTML = `
                        <div class="post" data-post-id="${post.id}">
                            <div class="post-header">
                                <img src="https://via.placeholder.com/50" alt="User Avatar" class="user-avatar">
                                <p class="user-name">You</p>
                            </div>
                            <div class="post-content">
                                <p>${post.content}</p>
                            </div>
                            <div class="post-actions">
                                <button class="like-button" data-post-id="${post.id}">❤️ <span class="like-count">0</span></button>
                                <button class="comment-toggle-button" data-post-id="${post.id}">💬 <span class="comment-count">0</span></button>
                            </div>
                            <div class="post-comments" data-post-id="${post.id}" style="display: none;"></div>
                            <div class="add-comment">
                                <input type="text" class="comment-input" data-post-id="${post.id}" placeholder="Add a comment...">
                                <button class="post-comment-button" data-post-id="${post.id}">Post</button>
                            </div>
                        </div>
                    `;
                    postsFeed.insertAdjacentHTML('afterbegin', newPostHTML);
                    postContentInput.value = '';
                });
        }
    });

    // Add Comment
    postsFeed.addEventListener('click', (e) => {
        if (e.target.classList.contains('post-comment-button')) {
            const postId = e.target.getAttribute('data-post-id');
            const commentInput = document.querySelector(`.comment-input[data-post-id="${postId}"]`);
            const commentText = commentInput.value.trim();

            if (commentText) {
                fetch(`/api/posts/${postId}/comments`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ content: commentText }),
                })
                    .then(response => response.json())
                    .then(comment => {
                        const postComments = document.querySelector(`.post-comments[data-post-id="${postId}"]`);
                        const newCommentHTML = `<div class="comment"><strong>You:</strong> ${comment.content}</div>`;
                        postComments.insertAdjacentHTML('beforeend', newCommentHTML);
                        postComments.style.display = 'block';
                        commentInput.value = '';
                    });
            }
        }
    });
});

