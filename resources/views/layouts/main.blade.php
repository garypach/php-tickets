<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tickets</title>
    <link rel="stylesheet" href='/css/app.css'>
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="header">
            <div>
                <a href="/">
                <h1 class="logo">PHP</h1>
                </a>
            </div>
        <div>
        <nav class="navbar">
            <ul class="nav-menu z-50">
                <li class="nav-item">
                    <a href="#" class="nav-link">Movies</a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">Theaters</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Food</a>
                </li>
            </ul>
            <button>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </button>
        </nav>
        </div>
        <div>
            <i class="fa-solid fa-user"></i>
        </div>
        </div>
    </header>     
    <main>         
    @yield('content')
    </main>
    <footer>
        <div class="social-media-bar">
            <div class="social-media-icons">
                <div>
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div>
                    <i class="fa-brands fa-youtube"></i>                </div>
                <div>
                    <i class="fa-brands fa-twitter"></i>                </div>
                <div>
                    <i class="fa-brands fa-instagram"></i>                </div>
            </div>
        </div>

        <div class="footer-links-cont">
            <div class="footer-links">
                <div>
                    <p>Our Company</p>
                    <ul>
                        <li>
                            Our Brands
                        </li>
                        <li>
                           Contact Us
                        </li>
                        <li>
                           Careers
                        </li>
                    </ul>
                </div>
                <div>
                    <p>Movies</p>
                    <ul>
                        <li>
                            Movies
                        </li>
                        <li>
                           Theaters
                        </li>
                        <li>
                           Ratings
                        </li>
                    </ul>
                </div>
                <div>
                    <p>More</p>
                    <ul>
                        <li>
                            Movie Club
                        </li>
                        <li>
                           Request Refund
                        </li>
                        <li>
                           Gift Cards
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        

    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>