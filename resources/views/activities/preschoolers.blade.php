<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pick the Activities You Love - WeCareKids</title>
    <link rel="stylesheet" href="{{ asset('globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('activities.css') }}" />
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

        <div class="filters">
            <a href="{{ route('activities') }}"
               class="{{ request()->is('activities') ? 'active' : '' }}">All</a>
            <a href="{{ route('activities.infants') }}"
               class="{{ request()->is('activities/infants') ? 'active' : '' }}">0-12 months</a>
            <a href="{{ route('activities.toddlers') }}"
               class="{{ request()->is('activities/toddlers') ? 'active' : '' }}">1-3 years old</a>
            <a href="{{ route('activities.preschoolers') }}"
               class="{{ request()->is('activities/preschoolers') ? 'active' : '' }}">4-6 years old</a>
            <a href="{{ route('activities.schoolAged') }}"
               class="{{ request()->is('activities/schoolAged') ? 'active' : '' }}">7-12 years old</a>
        </div>



        <!-- Activities Grid -->
        <section class="activities-grid">
            <div class="activity-item">
                <a href="{{ route('activities.preschoolers.tissue') }}">
                    <img src="{{ asset('img/tissue.jpg') }}" alt="tissue watercolour">
                    <h3>Tissue Watercolour</h3>
                </a>
            </div>
            <div class="activity-item">
                <a href="{{ route('activities.preschoolers.ballMatch') }}">
                    <img src="{{ asset('img/balls.png') }}" alt="balls Matching">
                    <h3>Pom Pom Colours Matching</h3>
                </a>
            </div>
            <div class="activity-item">
                <a href="{{ route('activities.preschoolers.aeiou') }}">
                    <img src="{{ asset('img/aeiou.png') }}" alt="vowels games">
                    <h3>Vowels Practice</h3>
                </a>
            </div>
            <div class="activity-item">
                <a href="{{ route('activities.preschoolers.cups') }}">
                    <img src="{{ asset('img/cups.jpg') }}" alt="cups">
                    <h3>VWhere is PomPom Ball?</h3>
                </a>
            </div>
            
            
        </section>

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
