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
            <h4 style="margin-bottom: 20px;">Where is Pom Pom Ball?</h4>
            <iframe
                src="https://drive.google.com/file/d/119CWdYKdB403W47WLmq0-gRq8AqWnwdG/preview"
                title="video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
        
        <section class="requirements">
            <h2 style="margin-top: 70px;">Benefits:</h2>
                <ul>
            
                    <li>Improves Memory Skills: Encourages children to remember the pompom's location even as cups are shuffled.</li>
                    <li>Enhances Focus and Attention: Sharpens their ability to concentrate on moving objects.</li>
                    <li>Develops Visual Tracking: Helps strengthen eye-hand coordination as they track the motion of the cups.</li>
                    <li>Boosts Problem-Solving Skills: Challenges kids to use logic and reasoning to make their guesses.</li>
                    <li>Fosters Social Interaction: A fun and engaging activity for playdates or group settings.</li>
                        

                </ul>
        </section>

        <section class="instructions">
            <h2>Techniques:</h2>
            <div class="age-group">
                <h2>For 4-Year-Olds:</h2>
                <ul>
                  <li>Use 3-4 cups and shuffle them at a moderate speed.</li>
                    <li>Provide visual cues or prompts if they need extra help.</li>
                    <li>Focus on encouraging participation and having fun rather than accuracy.</li>
                </ul>
              </div>
            
              <div class="age-group">
                <h2>For 5-Year-Olds:</h2>
                <ul>
                  <li>Use 4-5 cups to make the game more challenging.</li>
                <li>Shuffle the cups slightly faster to enhance the difficulty.</li>
                    <li>Add an element of surprise by switching pompom colors occasionally.</li>
                </ul>
              </div>
            
              <div class="age-group">
                <h2>For 6-Year-Olds:</h2>
                <ul>
                  <li>Use 5 or more cups and shuffle them quickly to test their tracking skills.</li>
                    <li>Introduce two pompoms and ask them to identify both positions after shuffling.</li>
                    <li>Allow them to take turns being the "shuffler" to build their leadership and observation skills.</li>
                </ul>
              </div>
        </section>

        <section class="lesson-learnt">
            <h2>Tips:</h2>
            <!--<h3>1. Chemical Reaction:</h3>-->
                <p>Ensure all materials (cups and pompoms) are non-toxic and free of sharp edges.
                    Use large pompoms to eliminate choking hazards.
                    Supervise the game to ensure children do not place pompoms or cups in their mouths.
                    Reinforce safe handling of materials, like not crushing the cups or throwing the pompoms.
                    Keep the game in a clean, clutter-free area to minimize distractions or accidents.
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
