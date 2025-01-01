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
                <li><a href="{{ route('forum.index') }}">Forum</a></li>
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
            <img src="{{ asset('img/article1.jpg') }}" alt="Blog Image">
            <h3>Avoid Gadjet Addiction In Chidren To Develop Talents And Interests</h3>
            <p>Gadgets are popular in children, it brings both positive and negative impacts for children. </p>
            <a href="{{ route('articles') }}">Read More</a>
        </div>
        <div class="blog-card">
            <img src="{{ asset('img/article5.jpg') }}" alt="Blog Image">
            <h3>Dietary Supplement Intake and Factors Associated</h3>
            <p>The prevalence of dietary supplement intake among children.</p>
            <a href="{{ route('articles') }}">Read More</a>
        </div>
    </section>



    <section class="activities">
        <div class="activities-carousel">

        <section class="activities">
            <h2>Exciting DIY Offline Activities for Endless Fun!</h2>
            <p class="activities-subtitle">These simple DIY activities can be done at home or in school.</p>
            <div class="activities-carousel">


                <div class="activity-cards">
                    <div class="card">
                        <img src="{{ asset('img/water.jpg') }}" alt="Water walking">
                        <h3>Water walking</h3>
                        <p>The colored water "walks" over the bridges and into the clear containers, mixing colors, and showing the magic of capillarity.</p>
                        <button class="btn-learn-more"
                        onclick="alert('To watch the video please subscribe to the website. Thank you!')">
                        Learn More</button>

                    </div>

                    <div class="card">
                        <img src="{{ asset('img/larva.png') }}" alt="Shaving cream water cycle">
                        <h3>Shaving cream water cycle</h3>
                        <p>Brush up on the water cycle with shaving-cream clouds atop a glass of water.</p>
                        <button class="btn-learn-more"
                        onclick="alert('To watch the video please subscribe to the website. Thank you!')">
                        Learn More</button>

                    </div>

                    <div class="card">
                        <img src="{{ asset('img/cool.jpg') }}" alt="Instant Ice">
                        <h3>Instant Ice</h3>
                        <p>Give your little scientists the powers of Elsa! Water can turn into ice as it’s being poured.</p>
                        <button class="btn-learn-more"
                        onclick="alert('To watch the video please subscribe to the website. Thank you!')">
                        Learn More</button>
                    </div>

                    <div class="card">
                        <img src="{{ asset('img/diy1.jpeg') }}" alt="How to make a kite">
                        <h3>How to make a kite</h3>
                        <p>Teach you little ones to make their own kites easily</p>
                        <button class="btn-learn-more"
                        onclick="alert('To watch the video please subscribe to the website. Thank you!')">
                        Learn More</button>
                    </div>
                </div>
                </button>
            </div>
        </section>
    </main>

    <!-- Subscription -->
    <section class="subscription">
        <h2>Choose Your Subscription Plan</h2>
        <div class="subscription-plans">
            <!-- Monthly Plan -->
            <div class="plan">
                <h3>Monthly Plan</h3>
                <p>RM12 per month</p>
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <input type="hidden" name="plan" value="monthly">
                    <a href="{{ route('payment.page') }}?plan=monthly" class="btn btn-primary">Subscribe Montly</a>
                </form>
            </div>

            <!-- Yearly Plan -->
            <div class="plan">
                <h3>Yearly Plan</h3>
                <p>RM150 per year</p>
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <input type="hidden" name="plan" value="yearly">
                    <a href="{{ route('payment.page') }}?plan=yearly" class="btn btn-primary">Subscribe Yearly</a>
                </form>
            </div>
        </div>
    </section>


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
                        <a href="{{ route('payment.page') }}?plan=yearly" class="btn btn-primary">Subscribe</a>
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



