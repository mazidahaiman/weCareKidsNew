document.querySelector('.post-button').addEventListener('click', function () {
    const commentInput = document.querySelector('.comment-input');
    const commentText = commentInput.value.trim();

    if (commentText !== '') {
        const commentSection = document.querySelector('.comment-section');

        const newComment = `
        <div class="comment">
            <div class="comment-user">
                <img src="{{ asset('img/profileImage.png') }}" alt="User avatar" class="user-avatar">
                <div class="user-info">
                    <p class="user-name">You</p>
                    <p class="comment-time">${new Date().toLocaleTimeString()}</p>
                </div>
            </div>
            <div class="comment-content">
                <p class="comment-text">${commentText}</p>
            </div>
            <div class="comment-actions">
                <button class="like-button">👍 <span>0</span></button>
                <button class="dislike-button">👎 <span>0</span></button>
            </div>
        </div>
        `;

        // Append new comment and clear input
        commentSection.insertAdjacentHTML('beforeend', newComment);
        commentInput.value = '';
    }
});
