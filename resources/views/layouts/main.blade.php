<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tickets</title>
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <ul class="nav-menu z-50">
                <h1 class="">PHP</h1>

                <li class="nav-item">
                    <a href="#" class="nav-link">STORIES</a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">PRICING</a>
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
    </header>              
    @yield('content')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
   
</body>

</html>