<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Okurita</title>

        
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Styles -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/><!-- Bootstrap -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet"/><!-- Font awesome -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet"/>
    @yield('head')
</head>
<body>
    <!--Header-->
<header class="header" id="header">
    <div class="header-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarcollapse" data-parent="#header">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="About Okurita">
                                About Okurita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="FAQ">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("contact") }}" class="nav-link" title="Contact Us">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="header-bottom">
        <nav class="navbar navbar-expand-lg" id="page-navigation">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- Navbar Brand -->
                <a href="{{ url("/") }}" class="navbar-brand">
                    <img src="{{ asset('img/logo/color.png') }}" alt="Okurita's Logo" />
                </a>
                <div class="collapse navbar-collapse flex-column" id="navbarSearch" data-parent="#header">
                    <form>
                        <div class="navbar-search">
                            <select name="search-category" id="search-category" class="form-select">
                                <option>Rakuten</option>
                                <option>Amazon</option>
                                <option>Yahoo</option>
                            </select>
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                            <button class="btn btn-search" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <div class="row justify-content-center marketplace">
                        <div class="col-3 marketplace__item">
                            <a href="product-list.html" title="Market Place 1">
                                <img src="{{ asset('img/logo/marketplace/rakuten.png') }}" alt="Rakuten" />
                            </a>
                        </div>
                        <div class="col-3 marketplace__item">
                            <a href="product-list.html" title="Market Place 2">
                                <img src="{{ asset('img/logo/marketplace/amazon.png') }}" alt="Amazon" />
                            </a>
                        </div>
                        <div class="col-3 marketplace__item">
                            <a href="product-list.html" title="Market Place 3">
                                <img src="{{ asset('img/logo/marketplace/3.png') }}" alt="Marketplace" />
                            </a>
                        </div>
                        <div class="col-3 marketplace__item">
                            <a href="product-list.html" title="Market Place 4">
                                <img src="{{ asset('img/logo/marketplace/yahoo.png') }}" alt="Yahoo" />
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav--main ml-auto">
                    <li class="nav-item d-mobile">
                        <a data-toggle="collapse" data-target="#navbarSearch" class="nav-link" title="Search">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.html" class="nav-link" title="Cart">
                            <span class="nav-link__icon">
                                <i class="fas fa-shopping-basket"></i>
                                <span class="pulse pulse-warning"></span>
                            </span>
                            <span class="nav-link__text">Cart</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Notifications">
                            <i class="fas fa-bell"></i>
                            <span class="pulse pulse-warning"></span>
                        </a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-link__icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="nav-link__text">Account</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end position-absolute">
                          <li><a class="dropdown-item" href="{{ url("mypage") }}">My Page</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item text-danger" id="logout" href="#">Logout</a></li>
                        </ul>
                    </li>
                                      
                    @endauth
                    @guest
                    
                    <!--Login/Register CTA on Desktop-->
                    <li class="nav-item nav-item--cta d-desktop d-tablet">
                        <a href="{{ route("login") }}" class="btn {{ (Request::is('register'))?" btn-grey":"btn-primary" }} " title="Login">
                            Login
                        </a>
                        <a href="{{ route("register") }}" class="btn {{ (Request::is('register'))?" btn-primary":"btn-grey" }}" title="Sign Up">
                            Sign Up
                        </a>
                    </li>
                    @endguest

                    @auth
                    <!--Login/Register CTA on Mobile-->
                    <li class="nav-item d-mobile d-tablet-none">
                        <a href="{{ route("login") }}" class="nav-link">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>
<main class="main" id="main">
    @yield('content')
</main>
<!--Footer-->
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-bg">
            <img src="{{ asset('img/logo/bg-footer.png') }}" alt="Footer Bg Logo">
        </div>
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="{{ asset('img/logo/white.png') }}" alt="Okurita's Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="{{ route("contact") }}">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("help/corporate-profile") }}">
                                        Corporate Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("help/privacy-policy") }}">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="{{ url("help/terms-of-service") }}">
                                        Terms of Service
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("faq") }}">
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("help/usage-fee") }}">
                                        Usage Fee
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="{{ url("help/shipping-method") }}">
                                        Shipping Method
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("help/payment-method") }}">
                                        Payment Method
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Terms &amp; Condition
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h6 class="mb-2 font-weight-700">Follow Us at</h6>
                    <ul class="social mb-0">
                        <li>
                            <a href="https://www.facebook.com/okurita.japan/" target="_blank" class="text-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="text-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/okurita.japan" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="text-youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- container -->
    <div class="footer-copyright">
        <div class="container">
            <p>&copy; Copyright 2021, Okurita. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<form id="form-logout" method="post" action="{{ route("logout") }}">
    @csrf
</form>
<script>
$(document).ready(function(){
    $("#logout").click(function(){
        $("#form-logout").submit();
    })
})
</script>
</body>
</html>
