<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>ClassicThrift</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

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
                                    <a href="{{ asset('images/logo/ClassicThrift.png') }}"><img
                                            src="{{ asset('images/logo/ClassicThrift.png') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--golden">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="/">Home</a>
                                            <!-- Sub Menu -->

                                        </li>
                                        <li class="has-dropdown has-megaitem">
                                            <a href="/shop-grid-sidebar-left">SHOP</a>
                                            <!-- Mega Menu -->
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="/faq">FAQ</a>
                                            <!-- Sub Menu -->
                                        </li>
                                        <li>
                                            <a href="/about-us">About Us</a>
                                        </li>
                                        <li>
                                            <a href="/contact-us">Contact Us</a>
                                        </li>
                                        @auth
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endauth
                                        @guest
                                            <li>
                                                <!-- Hidden if not logged in -->
                                            </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
