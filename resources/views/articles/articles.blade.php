<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('articles.css') }}">
    <link rel="stylesheet" href="{{ asset('globals.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="stylesheet" href="{{ asset('activities.css') }}">
</head>
<body>

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

<main class="main-content">
    <div class="article-container">

        @php
        // Define a mapping for article-specific data
        $articleData = [
            1 => [
                'image' => 'img/addiction.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:ba0eecdb-9928-4553-abe0-37ec878bf33e',
            ],
            2 => [
                'image' => 'img/parenting.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:0926ca62-b8f6-4231-9bbd-d4cdeb9cc38a',
            ],
            3 => [
                'image' => 'img/happy.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:97421bca-e8fa-4504-b23c-eafd16312ff2',
            ],
            4 => [
                'image' => 'img/supplements.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:ap:31b37fbe-7606-4bf2-81a0-6b163ca015d8',
            ],
            5 => [
                'image' => 'img/gadjet.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:ba0eecdb-9928-4553-abe0-37ec878bf33e',
            ],

            6 => [
                'image' => 'img/gadjet.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:ap:60b66bac-690f-4cee-87c3-369c3b63e175',
            ],

            7 => [
                'image' => 'img/parents.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:c75162a5-c3ce-4c56-a552-11114261d443',
            ],
            8 => [
                'image' => 'img/impact.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:84f8db3e-a91c-4b38-9b66-442f0c796ea2',
            ],

            9 => [
                'image' => 'img/science.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:ba0eecdb-9928-4553-abe0-37ec878bf33e',
            ],

            10 => [
                'image' => 'img/supplements.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:306a2c04-c86b-4ecc-ae05-99da9b4fb0c2',
            ],

            11 => [
                'image' => 'img/gadjet.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:306a2c04-c86b-4ecc-ae05-99da9b4fb0c2',
            ],

            12 => [
                'image' => 'img/mindful.png',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:eeb1fb0c-a8cd-4ed4-97eb-678751c770ce',
            ],

            13 => [
                'image' => 'img/single.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:77464da9-8f0e-484b-b919-4deaebd594cf',
            ],

            14 => [
                'image' => 'img/gadget.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:86114074-e32b-4a62-80e9-bccb13e1f9b1',
            ],

            15 => [
                'image' => 'img/mental.jpg',
                'link' => 'https://acrobat.adobe.com/id/urn:aaid:sc:AP:a775cb4c-aaba-4d1f-aeb6-5fe41ff102f2',
            ],

            16 => [
                'image' => 'img/child.jpg',
                'link' => 'https://journals.sagepub.com/doi/10.1177/1559827619849028',
            ],

            17 => [
                'image' => 'img/expert.jpg',
                'link' => 'https://childdevelopmentinfo.com/category/parenting/',
            ],

            18 => [
                'image' => 'img/sibling.jpg',
                'link' => 'https://childdevelopmentinfo.com/parenting/building-strong-sibling-bonds-through-play/',
            ],

            19 => [
                'image' => 'img/emotions.jpg',
                'link' => 'https://doi.org/10.1080/15295192.2021.1908090',
            ],

            20 => [
                'image' => 'img/parenting.jpg',
                'link' => 'https://www.apa.org/topics/families/parents-caregivers-kids-healthy-development',
            ],
            // Add additional articles as needed
        ];
        @endphp

        @foreach ($paginatedArticles as $index => $article)
        <div class="article-card">
            @php
                // Determine the actual article number (relative to all articles, not just the page)
                $articleNumber = ($page - 1) * 5 + $index + 1;

                // Retrieve specific data for the current article
                $image = $articleData[$articleNumber]['image'] ?? 'img/default.jpg'; // Default image if not defined
                $link = $articleData[$articleNumber]['link'] ?? '#'; // Default link if not defined
            @endphp
            <img src="{{ asset($image) }}" alt="Article {{ $articleNumber }}" class="article-image" style="width: 150px; height: auto;">
            <div class="article-text">
                <h2>{{ $article['title'] }}</h2>
                <p>{{ $article['description'] }}</p>
                <a href="{{ $link }}" class="read-more-btn">Read More</a>
            </div>
        </div>
        @endforeach

        <!-- Pagination Links -->
        <div class="pagination">
            @if ($page > 1)
            <a href="{{ route('articles', ['page' => $page - 1]) }}">&lt; Prev</a>
            @endif
            @for ($i = 1; $i <= $totalPages; $i++)
            <a href="{{ route('articles', ['page' => $i]) }}" class="{{ $i == $page ? 'active' : '' }}">{{ $i }}</a>
            @endfor
            @if ($page < $totalPages)
            <a href="{{ route('articles', ['page' => $page + 1]) }}">Next &gt;</a>
            @endif
        </div>

    </div>
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


