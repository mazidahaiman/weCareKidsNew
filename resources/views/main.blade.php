<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeCareKids - Main Page</title>
    <link rel="stylesheet" href="{{ asset('globals.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">

</head>
<body>
    <!-- Header -->
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
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button>
                    <img src="{{ asset('img/magnifying.png') }}" alt="Search">
                </button>
            </div>


            <!-- Profile Dropdown -->
            <div class="profile-button">
                <img src="{{ asset('img/profile.jpeg') }}" alt="Profile">
                <div class="profile-dropdown">
                    <a href="{{ route('profile') }}">My Profile</a>
                    <a href="{{ route('settings') }}">Settings</a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </header>


<!-- Offline Activities Videos Section -->
    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <div class="hero-content">

            <div class="hero-text">
                <h1>Current Campaign</h1>
                <p>From first steps to school plays, every moment is a milestone worth capturing. Join our ‘Capture Perfect Moments’ campaign and preserve the magic of your child's journey.</p>
                <div class="hero-buttons">
                    <a href="/join" class="btn btn-primary">Join us now</a>
                    <a href="/learn-more" class="btn btn-secondary">Learn more</a>


                </div>
            </div>

            <div class="hero-image">
                <img src="{{ asset('img/campaign.jpg') }}" alt="Current Campaign Image">
            </div>
        </div>
    </section>

<form action="/join" method="get">
    <form action="/learn-more" method="get">

  </form>



    <section class="testimonials">
        <h2>What Parents Say</h2>
        <div class="testimonial">
            <p>"WeCareKids has truly made parenting easier for us. The activities and forums are amazing!"</p>
            <h4>- Sarah Tan.</h4>
        </div>
        <div class="testimonial">
            <p>"My child loves the DIY activities! They're both fun and educational."</p>
            <h4>- James Peter </h4>
        </div>
        <div class="testimonial">
            <p>"WeCareKids has provide us many beneficial insights. We really love the website. Thank you."</p>
            <h4>- Omar </h4>
        </div>
    </section>

    <section class="featured-blogs">
        <h2>From Our Blog</h2>
        <div class="blog-card">
            <img src="{{ asset('img/addiction.jpg') }}" alt="Blog Image">
            <h3>Avoid Gadjet Addiction In Chidren To Develop Talents And Interests</h3>
            <p>Gadgets are popular in children, it brings both positive and negative impacts for children. </p>
            <a href="{{ route('articles') }}">Read More</a>
        </div>
        <div class="blog-card">
            <img src="{{ asset('img/supplements.jpg') }}" alt="Blog Image">
            <h3>Dietary Supplement Intake and Factors Associated</h3>
            <p>The prevalence of dietary supplement intake among children.</p>
            <a href="{{ route('articles') }}">Read More</a>
        </div>
    </section>



    <section class="activities">
        <div class="activities-carousel">

        <section class="activities">
            <h2>Offline Activities Videos</h2>
            <p class="activities-subtitle">These simple DIY activities can be done at home or in school.</p>
            <div class="activities-carousel">


                <div class="activity-cards">
                    <div class="card">
                        <img src="{{ asset('img/water.jpg') }}" alt="Water walking">
                        <h3>Water walking</h3>
                        <p>The colored water "walks" over the bridges and into the clear containers, mixing colors, and showing the magic of capillarity.</p>
                        <button class="btn-learn-more"
                        onclick="alert('You set up clear containers (e.g., glasses or jars) in a row, alternating between containers filled with colored water and empty ones. Place folded paper towels (or absorbent material) like bridges between the containers. The colored water walks up the paper towel and into the empty container next to it due to capillary action, where water moves through small spaces in the material against gravity. As the water transfers, colors mix in the empty containers, creating a mesmerizing visual display')">
                        Learn More</button>

                    </div>

                    <div class="card">
                        <img src="{{ asset('img/larva.png') }}" alt="Shaving cream water cycle">
                        <h3>Shaving cream water cycle</h3>
                        <p>Brush up on the water cycle with shaving-cream clouds atop a glass of water.</p>
                        <button class="btn-learn-more"
                        onclick="alert('Arrange clear glasses in a circle or row, alternating between glasses filled with colored water and empty ones. Place folded paper towels as bridges connecting each glass. Over time, the water walks through the paper towels into the empty glasses, mixing colors and showing capillary action. Observe the water move and discuss the science behind it!')">
                        Learn More</button>

                    </div>

                    <div class="card">
                        <img src="{{ asset('img/cool.jpg') }}" alt="Instant Ice">
                        <h3>Instant Ice</h3>
                        <p>Give your little scientists the powers of Elsa! Water can turn into ice as it’s being poured.</p>
                        <button class="btn-learn-more"
                        onclick="alert('Chill bottles of purified water in the freezer for about 2–3 hours, just until they are supercooled (cold enough to freeze but still liquid). Gently pour the water onto an ice cube or tap the bottle to trigger instant freezing. The water will turn into ice instantly, creating a fascinating frozen tower or icy slush. Explain how supercooling and nucleation cause the water to freeze rapidly!')">
                        Learn More</button>
                    </div>

                    <div class="card">
                        <img src="{{ asset('img/diy1.jpeg') }}" alt="How to make a kite">
                        <h3>How to make a kite</h3>
                        <p>Teach you little ones to make their own kites easily</p>
                        <button class="btn-learn-more"
                        onclick="alert('To make a kite, you need two lightweight sticks, paper or plastic, string, tape or glue, scissors, and a small cloth for the tail. Start by crossing the sticks to form a frame, tying them securely at the intersection. Use string to outline the frame into a diamond or desired shape. Lay the frame on the paper or plastic, cut it slightly larger than the frame, and fold the edges over the string, securing them with tape or glue. Attach a small cloth tail to the bottom for balance.  Finally, tie a flying string to the frames intersection or a bridle, and your kite is ready to fly. Test it in an open space with plenty of wind. ')">
                        Learn More</button>
                    </div>
                </div>
                </button>
            </div>
        </section>





    </main>


    <!-- Footer -->
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
                <p>© 2022 WeCareKids, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a> · <a href="#">Sitemap</a></p>
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

