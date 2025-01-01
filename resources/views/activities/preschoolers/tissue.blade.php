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
            <h4 style="margin-bottom: 20px;">Tissue Water Colour</h4>
            <iframe
                src="https://drive.google.com/file/d/118Y-KafwSNL5-9tsxcPzfHwTfaXWoWzn/preview"
                title="video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
        
        <section class="requirements">
            <h2 style="margin-top: 70px;">Benefits:</h2>
                <ul>
            
                    <li>Encourages creativity and self-expression through painting.</li>
                    <li>Improves fine motor skills and hand-eye coordination by handling a brush.</li>
                    <li>Introduces color recognition and mixing concepts.</li>
                    <li>Develops focus and patience during the painting process.</li>
                    <li>Provides a sensory experience through the feel of the brush and the texture of the paper towel.</li>
                        

                </ul>
        </section>

        <section class="instructions">
            <h2>Techniques:</h2>
            <div class="age-group">
                <h2>For 4-Year-Olds:</h2>
                <ul>
                    <li>Use larger paintbrushes or sponge brushes for easier handling.</li>
                    <li>Provide non-toxic watercolors or diluted food coloring for safe use.</li>
                    <li>Focus on simple, free painting instead of following outlines.</li>
                </ul>
              </div>
            
              <div class="age-group">
                <h2>For 5-Year-Olds:</h2>
                <ul>
                  <li>Encourage them to paint within the rainbow lines with guidance.</li>
                    <li>Introduce basic color names and let them explore mixing primary colors.</li>
                    <li>Allow them to freely paint other areas for added creativity.</li>
                </ul>
              </div>
            
              <div class="age-group">
                <h2>For 6-Year-Olds:</h2>
                <ul>
                  <li>Encourage more precise painting within the outlines of the rainbow.</li>
                    <li>Teach color order (e.g., red, orange, yellow, etc.) for basic sequencing skills.</li>
                    <li>Incorporate a discussion about rainbows and weather for a fun learning moment.</li>
                </ul>
              </div>
        </section>

        <section class="lesson-learnt">
            <h2>Tips:</h2>
            <!--<h3>1. Chemical Reaction:</h3>-->
                <p>Always use non-toxic, child-safe watercolors or paint.
                    Supervise to ensure toddlers don’t put brushes or paint in their mouths.
                    Use an easy-to-clean surface and clothing protection (e.g., smocks or old clothes).
                    Keep water containers stable to prevent spills.
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
