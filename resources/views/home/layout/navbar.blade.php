<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>ClassicThrift</title>

    <link rel="stylesheet" href="{{ asset('css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.2/css/all.css">


</head>

<body>
    <!-- Start Header Area -->
    <header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="#"><img src="images/logo/ClassicThrift.png" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--golden">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="/">Home</a>
                                        </li>
                                        <li class="has-dropdown has-megaitem">
                                            <a href="/shop">SHOP</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="/faq">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="/about-us">About Us</a>
                                        </li>
                                        <li>
                                            <a href="/contact-us">Contact Us</a>
                                        </li>
                                        <li>
                                            @guest
                                            <li><a href="/sesi/login">Login</a></li>
                                        @else
                                            <li><a href="/dashboard">{{ Auth::user()->name }}</a></li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->

                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--golden">
                                <li>
                                    <a href="#offcanvas-wishlist" class="offcanvas-toggle">
                                        <i class="icon-heart"></i>
                                        @auth
                                            <span
                                                class="item-count">{{ Auth::check() ? Auth::user()->wishlists()->count() : 0 }}</span>
                                        @else
                                            <span class="item-count">0</span>
                                        @endauth
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                        <i class="icon-bag"></i>
                                        @auth
                                            <span
                                                class="item-count-keranjang">{{ Auth::user()->keranjangs->count() ?? 0 }}</span>
                                        @else
                                            <span class="item-count">0</span>
                                        @endauth
                                    </a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div>
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="#"><img src="images/logo/CTPutih.png" alt=""></a>
            </div>

            <address class="address">
                <span>Address: Jl. Mendalo</span>
                <span>Call Us: 012345</span>
                <span>Email: classicthrift@gmail.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>


        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </script>
