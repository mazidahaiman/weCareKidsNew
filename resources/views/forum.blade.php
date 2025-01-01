<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pick the Activities You Love - WeCareKids</title>
    <link rel="stylesheet" href="{{ asset('globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('activities.css') }}" />
    <link rel="stylesheet" href="{{ asset('forum.css') }}" />
</head>
<body>
    <!-- Header (same as in main.blade.php) -->
    <header>
        <a href="{{ route('home') }}">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="WeCareKids Logo">
            </div>
        </a>
       <!-- Navigation Menu -->
        <nav>
            <ul>
                <li><a href="{{ route('activities') }}">Activities</a></li>
                <li><a href="{{ route('forum') }}">Forums</a></li>
                <li><a href="{{ route('articles') }}">Articles</a></li>
            </ul>
        </nav>

        <div class="header-right">
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button>
                    <img src="{{ asset('img/magnifying.png') }}" alt="Search">
                </button>
            </div>
            <div class="profile-button">
                <img src="{{ asset('img/profile.jpeg') }}" alt="Profile">
                <div class="profile-dropdown">
                    <a href="#">My Profile</a>
                    <a href="#">Settings</a>
                    <a href="{{ url('/logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>

        <div class="forum-container">
            <h1>Welcome to the Forum</h1>
    
            <!-- Post Form -->
            <div class="create-post">
                <textarea id="postContent" placeholder="What's on your mind?" rows="3"></textarea>
                <button id="createPostButton">Post</button>
            </div>
    
            <!-- Posts Feed -->
            <div id="postsFeed" class="posts-feed">
                <!-- Example Post (Static for Reference, Will Be Dynamically Added) -->
                <div class="post">
                    <div class="post-header">
                        <img src="https://via.placeholder.com/50" alt="User Avatar" class="user-avatar">
                        <p class="user-name">John Doe</p>
                    </div>
                    <div class="post-content">
                        <p>Example post content goes here.</p>
                    </div>
                    <div class="post-actions">
                        <button class="like-button" data-post-id="1">❤️ <span class="like-count">0</span></button>
                        <button class="comment-toggle-button" data-post-id="1">💬 <span class="comment-count">0</span></button>
                    </div>
                    <div class="post-comments" data-post-id="1" style="display: none;">
                        <!-- Comments will be dynamically added here -->
                    </div>
                    <div class="add-comment">
                        <input type="text" class="comment-input" data-post-id="1" placeholder="Add a comment...">
                        <button class="post-comment-button" data-post-id="1">Post</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/forum.js') }}"></script>



        <!-- Pagination (optional) -->
        <section class="pagination">
            <button class="page-arrow">&lt;</button>
            <button class="page-number active">1</button>
            <button class="page-number">2</button>
            <button class="page-number">3</button>
            <span>...</span>
            <button class="page-number">10</button>
            <button class="page-arrow">&gt;</button>
        </section>
    </main>

    <!-- Footer (same as in main.blade.php) -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="{{ asset('img/logo.png') }}" alt="WeCareKids">
            </div>
            <div class="footer-sections">
                <div class="footer-column">
                    <h3>Product</h3>
                    <ul>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">User guides</a></li>
                        <li><a href="#">Webinars</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Join us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Subscribe to our newsletter</h3>
                    <p>For product announcements and exclusive insights</p>
                    <form>
                        <input type="email" placeholder="Input your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-language">
                <select>
                    <option>English</option>
                    <option>Spanish</option>
                    <option>French</option>
                </select>
            </div>
            <div class="footer-legal">
                <p>© 2022 Brand, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a> · <a href="#">Sitemap</a></p>
            </div>
            <div class="footer-social">
                <a href="#"><img src="{{ asset('img/twitter.jpeg') }}" alt="Twitter"></a>
                <a href="#"><img src="{{ asset('img/facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('img/linkedin.png') }}" alt="LinkedIn"></a>
                <a href="#"><img src="{{ asset('img/youtube.png') }}" alt="YouTube"></a>
            </div>
        </div>
    </footer>
</body>
</html>
