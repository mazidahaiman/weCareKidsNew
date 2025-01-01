<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pick the Activities You Love - WeCareKids</title>
    <link rel="stylesheet" href="{{ asset('globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('activities.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/js/comments.js'])

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
                <li><a href="{{ route('forum') }}">Forum</a></li>
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

        <div class="video-container">
            <h4 style="margin-bottom: 20px;">Math Ice Cream</h4>
            <iframe
                src="https://drive.google.com/file/d/11fALiRlIzAsgLKF7flJaqzzwPXyQ_4jn/preview"
                title="video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
        
        <section class="requirements">
            <h2 style="margin-top: 70px;">Benefits:</h2>
                <ul>
            
                    <li>Enhances Math Skills: Teaches addition, subtraction, and problem-solving in a fun, hands-on way.</li>
                    <li>Develops Critical Thinking: Encourages logical thinking by solving equations.</li>
                    <li>Improves Fine Motor Skills: Handling and attaching pegs strengthens hand-eye coordination.</li>
                    <li>Promotes Engagement: Makes learning math interactive and enjoyable.</li>
                    <li>Encourages Independent Learning: Kids can solve problems on their own or work in groups.</li>
                        

                </ul>
        </section>

        <section class="instructions">
            <h2>Techniques:</h2>
            <div class="age-group">
            
              <div class="age-group">
                <h2>For 7-9-Year-Olds:</h2>
                <ul>
                  <li>Introduce more complex problems, such as double-digit addition or subtraction.</li>
                    <li>Add a timer to create a challenge and encourage faster calculations.</li>
                    <li>Allow them to create their own math "orders" to enhance creativity and understanding.</li>
                </ul>
              </div>
            
              <div class="age-group">
                <h2>For 10-12-Year-Olds:</h2>
                <ul>
                  <li>Incorporate multiplication and division problems for advanced practice.</li>
                    <li>Introduce word problems related to real-life scenarios (e.g., "If 3 customers order 2 items each, how many items are needed?").</li>
                    <li>Encourage them to create and solve problems for peers to build collaboration skills.</li>
                </ul>
              </div>
        </section>

        <section class="lesson-learnt">
            <h2>Tips:</h2>
            <!--<h3>1. Chemical Reaction:</h3>-->
                <p>Ensure that all materials, like pegs and small pieces, are non-toxic and free of sharp edges.
                    For younger children, ensure pegs are large enough to prevent choking hazards.
                    Supervise play with younger kids to ensure safe use of small or detachable parts.
                    Store materials properly after use to avoid loss or accidental misuse.
                    Check cardboard edges and other components for splinters or rough surfaces to avoid injury.
                </p>
                
        </section>

        <div class="comment-section">
            <!-- Comment Header -->
            <h3>Comment</h3>

            <!-- Existing Comments -->
            <div class="comment">
                <div class="comment-user">
                    <img src="{{ asset('img/profileImage.png') }}" alt="User avatar" class="user-avatar">
                    <div class="user-info">
                        <p class="user-name">Klara Weaver</p>
                        <p class="comment-time">10:50 AM</p>
                    </div>
                </div>
                <div class="comment-content">
                    <p class="comment-text">
                        <strong>Nulla aute nisi quis nostrud reprehenderit nisi cillum mollit anim amet duis non esse.</strong>
                        <br>
                        Eu laborum fugiat magna reprehenderit reprehenderit tempor aliquip nisi officia irure qui ad. Labore pariatur ex ut aliqua ad exercitation deserunt eu nisi do velit mollit consequat in quis. Adipisicing magna 🚀🚀🚀
                    </p>
                </div>
                <div class="comment-actions">
                    <button class="like-button">👍 <span>3</span></button>
                    <button class="dislike-button">👎 <span>20</span></button>
                </div>
            </div>

            <!-- Add Comment -->
            <div class="add-comment">
                <img src="{{ asset('img/profileImage.png') }}" alt="Your avatar" class="user-avatar">
                <input type="text" placeholder="Write a comment..." class="comment-input">
                <div class="comment-buttons">
                    <button class="cancel-button">Cancel</button>
                    <button class="post-button">Post</button>
                </div>
            </div>
        </div>


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
