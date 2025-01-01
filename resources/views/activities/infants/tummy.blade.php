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
            <h4 style="margin-top: 20px;">Tummy Time</h4>
            <iframe
                src="https://www.youtube.com/embed/UEnzqSK-j_s?si=E7zVnFvPiyIZKV0j"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
        
        <section class="requirements">
            <h2 style="margin-top: 70px;">What is Tummy Time?</h2>
                <ul>
                

                    <li>Tummy time refers to the time infants spend on their stomachs while awake and supervised.
                        It helps strengthen the baby's neck, shoulders, arms, and upper body.</li>
                    <li>Why is Tummy Time Important?</li>

                    <li>Encourages physical development and helps build muscle strength for crawling, sitting, and rolling.
                        Prevents flat spots on the back of the baby's head (positional plagiocephaly).
                        Supports sensory and motor skill development.</li>
                    <li>When to Start Tummy Time?
                        
                        Begin as soon as the baby comes home from the hospital, usually a few days after birth.
                        Start with 1-2 minutes per session, a few times a day.</li>
                </ul>
        </section>

        <section class="instructions">
            <h2>Here is what you to do:</h2>
                <ol>
                    <li>Place the baby on a firm, safe surface, such as a play mat or blanket on the floor.</li>
                    <li>Always supervise to ensure safety and comfort.</li>
                    <li>Use toys, mirrors, or your voice to keep the baby engaged and happy.</li>
                    <li>Gradually increase tummy time duration as the baby gets more comfortable.</li>

                    <li>Tips for Successful Tummy Time:</li>

                    <li>Make it part of a routine, such as after diaper changes or naps.
                        Get down on the floor with your baby for interaction and encouragement.
                        Use a rolled towel or small pillow under their chest for added support if needed.
                        Keep it fun by incorporating songs, colorful toys, or playing peek-a-boo.</li>
                </ol>
        </section>

        <!--<section class="lesson-learnt">
            <h2>Lesson learnt:</h2>
            <h3>1. Chemical Reaction:</h3>
                <p>
                    The eggshell is primarily made of calcium carbonate (CaCO<sub>3</sub>).
                    Vinegar contains acetic acid (CH<sub>3</sub>COOH). When the acetic acid reacts with calcium carbonate,
                    it produces carbon dioxide (CO<sub>2</sub>), water (H<sub>2</sub>O), and calcium acetate (Ca(CH<sub>3</sub>COO)<sub>2</sub>).
                </p>
                <p>The reaction is as follows:</p>
                <p><code>CaCO<sub>3</sub>(s) + 2CH<sub>3</sub>COOH(l) → Ca(CH<sub>3</sub>COO)<sub>2</sub>(s) + H<sub>2</sub>O(l) + CO<sub>2</sub>(g)</code></p>
                <p>
                    Water and excess vinegar evaporate upon standing. Carbon dioxide (a gas) is released into the air during the reaction.
                    After you dissolve the eggshell, the egg is surrounded by a membrane.
                </p>
                <h3>2. Osmosis (Optional Extended Experiment):</h3>
                <p>Explain the osmosis experiment here.</p>
        </section>-->

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
