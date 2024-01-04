<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="imagetoolbar" content="no" />
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
@yield('title')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha384-LC5KX6bLq7r0MPQ6rC90qF0aPGo/jA9a27d1v4vpl3z6lFkvww5Y2K6RuzQa6aV" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more.">

    <!-- Google-specific meta tags -->
    <meta name="google-site-verification" content="ManhattanNycwalk-Manhattan-nycwalk-NYC-manhattan-nycwalk-nyc-manhatten-WALK-walk-NEW-YORK-new-york-Brooklyn-brooklyn-Times-Square-TimesSquare">

    <!-- Open Graph Meta Tags for Facebook -->
    <meta property="og:title" content="Manhattan Nyc">
    <meta property="og:description" content="Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more.">
    <meta property="og:image" content="https://manhattan-nycwalk.com/images/manhattan/manhattan.jpg">
    <meta property="og:url" content="https://manhattan-nycwalk.com">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:title" content="Manhattan Nyc">
    <meta name="twitter:description" content="Information about Manhattan, NYC, museum, theaters, famous places and buildings like Times Square, Rockefeller center, one world trade center, Brooklyn bridge, statue of Liberty,also parks and more.">
    <meta name="twitter:image" content="https://manhattan-nycwalk.com/images/manhattan/manhattan.jpg">
    <meta name="twitter:card" content="summary_large_image">

    <!-- JSON-LD for Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://manhattan-nycwalk.com",
        "@type": "Organization",
        "name": "Manhattan Nyc",
        "url": "https://manhattan-nycwalk.com",
        "logo": "URL to your organization's logo",
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
            <div class="col-lg-3   layerIndexx  d-lg-none   ">
                <div class="sidebar ">

                    <div class="widget">
                        <div class="link-widget text-dark">
                            <div class="dropdown">
                                <button class="btn btn-lg index dropdown-toggle " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    index
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <div class="position-fixed top_head">
                        <p class="d-inline"></p>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars text-white"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse mt-5 mt-lg-0" id="navbarCollapse">
                        <div>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('content') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('about') }}">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn index dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Article
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('home')}}">Manhattan, New York city</a>
                                <a class="dropdown-item" href="{{route('times_square')}}">Times Square, NYC</a>
                                <a class="dropdown-item" href="{{route('vessel')}}">Vessel, NYC</a>
                                <a class="dropdown-item" href="{{route('rockefeller')}}">Rockefeller Center, NYC</a>
                                <a class="dropdown-item" href="{{route('one_world')}}">One World, NYC</a>
                                <a class="dropdown-item" href="{{route('charging_bull')}}">Charging Bull, NYC</a>
                                <a class="dropdown-item" href="{{route('wall_street')}}">Wall Street, NYC</a>
                                <a class="dropdown-item" href="{{route('little_island')}}">Little Island, NYC</a>
                                <a class="dropdown-item" href="{{route('centra_park')}}">Centra Park, NYC</a>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <form class="form-inline">
                                <a class="mr-sm-2" style="color:whitesmoke" href="#Directions">Directions</a>
                                <a class="btn btn-outline-success my-2 my-sm-0" href="#map" type="submit">Map</a>
                            </form>
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
                            We are working to make Manhattan, New York City great by providing everything to serve and comfort the visitors of the Manhattan,
                            New York City, whether from inside the United States of America or from abroad, as well as it's residents.
                        </p>
                    </div>

                    <div class="col-xs-6 col-md-3 col-6">
                        <h6>Article</h6>
                        <ul class="footer-links">

                            <li><a  href="{{route('home')}}">Manhattan, New York city</a></li>
                            <li><a  href="{{route('times_square')}}">Times Square New York, NYC</a></li>
                            <li><a  href="{{route('vessel')}}">Vessel, NYC</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3 col-6">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="{{route('home')}}">Home Page</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('content')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
                            <a href="https://www.linkedin.com/in/abdelrahman-el-desoky-b926391b8">Abdelrahman El-Desoky</a>.
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
