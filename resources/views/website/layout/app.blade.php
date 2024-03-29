<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Manhattan New York</title>
<!-- Site Metas -->
@yield('title')
<meta name="keywords" content="Manhattan, New York City, nyc, manhattan-nycwalk">
<meta name="description"
    content="Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more.">
<meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha384-LC5KX6bLq7r0MPQ6rC90qF0aPGo/jA9a27d1v4vpl3z6lFkvww5Y2K6RuzQa6aV" crossorigin="anonymous">

<link rel="canonical" href="https://manhattan-nycwalk.com">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more.">
    <link rel="icon" type="image/png" href="{{ asset('website/assets/Manhattan Logo/LOGO .png') }}">

    <!-- Google-specific meta tags -->
    <meta name="google-site-verification"
        content="ManhattanNycwalk-Manhattan-nycwalk-NYC-manhattan-nycwalk-nyc-manhatten-WALK-walk-NEW-YORK-new-york-Brooklyn-brooklyn-Times-Square-TimesSquare">


    <!-- Open Graph Meta Tags for Facebook -->
    <meta property="og:title" content="Manhattan Nyc">
    <meta property="og:description"
        content="Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more.">
    <meta property="og:image" content="https://manhattan-nycwalk.com/images/manhattan/manhattan.jpg">
    <meta property="og:url" content="https://manhattan-nycwalk.com">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:title" content="Manhattan Nyc">
    <meta name="twitter:description"
        content="Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more.">
    <meta name="twitter:image" content="https://manhattan-nycwalk.com/images/manhattan/manhattan.jpg">
    <meta name="twitter:card" content="summary_large_image">


    <!-- JSON-LD for Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://manhattan-nycwalk.com",
        "@type": "Organization",
        "name": "Manhattan Nyc",
        "url": "https://manhattan-nycwalk.com",
        "logo": "https://manhattan-nycwalk.com/website/assets/Manhattan%20Logo/LOGO.png",
        "description": "Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more."
    }
    </script>



    @include('website.layout.head')

</head>

<body>
    <div id="scrollToTopBtn" class="scroll-to-top">
        <div class="arrow-up">
            <i class="fa-regular fa-circle-up text-light"></i>
        </div>
    </div>


    </div>

    <div id="wrapper">

        {{-- * --------------------------------------------------------------------------------  --}}
        {{-- *                                   start navbar                                    --}}
        {{-- * --------------------------------------------------------------------------------  --}}
        <!-- Example single danger button -->

        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg py-5 bg-inverse fixed-top  ">
                    <div class="container-fluid ">

                        <div class="logo2 ">
                            <img class="object-fit-cover  rounded" width="100px" onContextMenu="return false;"
                                src="{{ asset('website/assets/Manhattan Logo/LOGO.png') }}" alt="Article Image">

                        </div>
                        <div class=" d-flex justify-content-between">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="fas fa-bars text-white"></i>
                            </button>
                        </div>
                        <div class="collapse  navbar-collapse " id="navbarCollapse">
                            <div
                                class="w-100 d-lg-flex d-sm-block ml-sm-5 ml-lg-0 justify-content-between align-items-center">
                                <div class="logo1 ">
                                    <img class="object-fit-cover  rounded" width="100px" onContextMenu="return false;"
                                        src="{{ asset('website/assets/Manhattan Logo/LOGO.png') }}" alt="Article Image">

                                </div>
                                <div class="d-flex align-items-center">
                                    <ul class="navbar-nav d-flex  justify-content-center ">

                                        <li class="nav-item">
                                            <a class="nav-link text-white hoverLink" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white hoverLink"
                                                href="{{ route('content') }}">Contact
                                                Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white hoverLink" href="{{ route('about') }}">About
                                                Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white hoverLink" href="#Directions">Directions</a>
                                        </li>
                                    </ul>


                                </div>
                                <div class="d-flex ">
                                    <div class="dropdown">
                                        <button class="btn btn-info text-white mr-2   dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Article
                                        </button>
                                        <div style="height: 500px" class="dropdown-menu  overflow-auto"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('home') }}">Manhattan, New York
                                                city</a>
                                            <a class="dropdown-item" href="{{ route('times_square') }}">Times Square,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('vessel') }}">Vessel, NYC</a>
                                            <a class="dropdown-item" href="{{ route('one_world') }}">One World,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('rockefeller') }}">Rockefeller
                                                Center, NYC</a>
                                            <a class="dropdown-item" href="{{ route('charging_bull') }}">Charging
                                                Bull, NYC</a>
                                            <a class="dropdown-item" href="{{ route('wall_street') }}">Wall Street,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('little_island') }}">Little
                                                Island, NYC</a>
                                            <a class="dropdown-item" href="{{ route('centra_park') }}">Centra Park,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('south_street') }}">South Street,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('statue_of_liberty') }}">Statue,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('brooklyn_bridge') }}">Brooklyn
                                                Bridge, NYC</a>
                                            <a class="dropdown-item" href="{{ route('edge') }}">Edge, NYC</a>
                                            <a class="dropdown-item" href="{{ route('highline') }}"> Highline,
                                                NYC</a>
                                            <a class="dropdown-item"
                                                href="{{ route('united_nations_headquarters') }}">United, NYC</a>

                                            <a class="dropdown-item" href="{{ route('Chinatown') }}">Chinatown,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('empire_state') }}"> Empire
                                                State,
                                                NYC</a>
                                            <a class="dropdown-item" href="{{ route('little_italy') }}">
                                                little_italy, NYC</a>


                                        </div>
                                    </div>
                                    <form class="form-inline">
                                        <a class="btn btn-info px-5" href="#map" type="submit">Map</a>
                                    </form>
                                </div>

                            </div>


                        </div>
                    </div>
                </nav>
            </div>
        </header>

        {{-- * --------------------------------------------------------------------------------  --}}
        {{-- *                                   end navbar                                      --}}
        {{-- * --------------------------------------------------------------------------------  --}}

        @yield('header')

        @yield('content')

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start footer                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}

        <!-- Site footer -->
        <footer class="site-footer">

            <div class="container">
                <div class="row">
                    {{-- <div class="col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div> --}}
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p class="text-justify">
                            We are working to make Manhattan, New York City great by providing everything to serve and
                            comfort the visitors of the Manhattan,
                            New York City, whether from inside the United States of America or from abroad, as well as
                            it's residents.
                        </p>
                    </div>

                    <div class="col-xs-6 col-md-3 col-6">
                        <h6>Article</h6>
                        <ul class="footer-links">

                            <li><a href="{{ route('home') }}">Manhattan, New York city</a></li>
                            <li><a href="{{ route('times_square') }}">Times Square New York, NYC</a></li>
                            <li><a href="{{ route('vessel') }}">Vessel, NYC</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3 col-6">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="{{ route('home') }}">Home Page</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('content') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
                            <a href="https://www.linkedin.com/in/abdelrahman-el-desoky-b926391b8">Abdelrahman
                                El-Desoky</a>.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end footer                                    --}}
        {{-- * -------------------------------------------------------------------------------- --}}

    </div>

    @include('website.layout.script')

</body>

</html>
