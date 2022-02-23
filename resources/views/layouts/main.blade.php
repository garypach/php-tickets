<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tickets</title>
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
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
    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }

        const navLink = document.querySelectorAll(".nav-link");

        navLink.forEach((n) => n.addEventListener("click", closeMenu));

        function closeMenu() {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>