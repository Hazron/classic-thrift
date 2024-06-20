@include('home.layout.navbar')

<div id="offcanvas-wishlist" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div>
    <div class="offcanvas-wishlist-wrapper">
        <h4 class="offcanvas-title">Wishlist</h4>
        <ul class="offcanvas-wishlist">
            @guest
                <li class="offcanvas-wishlist-item-single">
                    <p class="text-center">Anda belum login, <a href="{{ route('indexlogin') }}">Klik Login</a></p>
                </li>
            @else
                @if (!Auth::user()->wishlist || Auth::user()->wishlist->isEmpty())
                    <li class="offcanvas-wishlist-item-single">
                        <p class="text-center">Anda belum memiliki wishlist</p>
                    </li>
                @else
                    @foreach (Auth::user()->wishlist as $wishlist)
                        <li class="offcanvas-wishlist-item-single">
                            <div class="offcanvas-wishlist-item-block">
                                <a href="#" class="offcanvas-wishlist-item-image-link">
                                    <img src="{{ asset($wishlist->produk->foto) }}"
                                        alt="{{ $wishlist->produk->nama_produk }}" class="offcanvas-wishlist-image">
                                </a>
                                <div class="offcanvas-wishlist-item-content">
                                    <a href="#"
                                        class="offcanvas-wishlist-item-link">{{ $wishlist->produk->nama_produk }}</a>
                                    <div class="offcanvas-wishlist-item-details">
                                        <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                        <span class="offcanvas-wishlist-item-details-price">Rp.
                                            {{ number_format($wishlist->produk->harga, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="offcanvas-wishlist-item-delete text-right">
                                <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </li>
                    @endforeach
                @endif
            @endguest
        </ul>
        <ul class="offcanvas-wishlist-action-button">
            <li><a href="/wishlist" class="btn btn-block btn-golden">View Wishlist</a></li>
        </ul>
    </div>
</div>

<div class="offcanvas-overlay"></div>
<!-- Start Hero Slider Section-->
<div class="hero-slider-section">
    <!-- Slider main container -->
    <div class="hero-slider-active swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Start Hero Single Slider Item -->
            <div class="hero-single-slider-item swiper-slide">
                <!-- Hero Slider Image -->
                <div class="hero-slider-bg">
                    <img src="images/hero-slider/home-1/bg.jpg" alt="">
                </div>
                <!-- Hero Slider Content -->
                <div class="hero-slider-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <div class="hero-slider-content">
                                    <h2 class="title">Welcome To <br> ClassicThrift</h2>
                                    <a href="/product-details-default" class="btn btn-lg btn-outline-golden">Shop
                                        Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-single-slider-item swiper-slide">
                <!-- Hero Slider Image -->
                <div class="hero-slider-bg">
                    <img src="images/hero-slider/home-1/q.jpeg" alt="">
                </div>
                <!-- Hero Slider Content -->
                <div class="hero-slider-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <div class="hero-slider-content">

                                    <h2 class="title">Find Your Outfit! </h2>
                                    <a href="/product-details-default" class="btn btn-lg btn-outline-golden">Shop
                                        Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Hero Single Slider Item -->
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination active-color-golden"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev d-none d-lg-block"></div>
        <div class="swiper-button-next d-none d-lg-block"></div>
    </div>
</div>

<!-- Offcanvas Overlay -->

<!-- End Hero Slider Section-->


<!-- Start Product Default Slider Section -->


<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid section-inner-bg">
    <div class="instagram-section section-top-gap-100 section-inner-bg">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">New Products</h3>
                                <p>Find your latest outfit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <div class="swiper-wrapper">

                                    @foreach (App\Models\Produk::limit(4)->get() as $produk)
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="/product-details-default" class="image-link">
                                                    <img src="{{ asset($produk->foto) }}" alt="">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">Cart</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalQuickview"><i
                                                                class="icon-magnifier"></i></a>
                                                        <a href="#"><i class="icon-heart"></i></a>
                                                        <a href="#"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-left">
                                                    <h6 class="title"><a
                                                            href="/product-details-default">{{ $produk->nama_produk }}</a>
                                                    </h6>
                                                </div>
                                                <div class="content-right">
                                                    <span class="price">Rp. {{ $produk->harga }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('home.layout.footer')
