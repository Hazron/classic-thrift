@include('home.layout.navbar')

<!-- Start Offcanvas Header -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div>
    <div class="offcanvas-wishlist-wrapper">
        <h4 class="offcanvas-title">Wishlist</h4>
        <ul class="offcanvas-wishlist">
            @guest
                <li class="offcanvas-wishlist-item-single">
                    <p class="text-center">Anda belum login, <a href="sesi/login">Klik Login</a></p>
                </li>
            @else
                @if ($wishlistItems->isEmpty())
                    <p>Anda belum memiliki wishlist</p>
                @else
                    @foreach ($wishlistItems as $wishlist)
                        <li class="offcanvas-wishlist-item-single">
                            <div class="offcanvas-wishlist-item-block">
                                <a href="#" class="offcanvas-wishlist-item-image-link">
                                    <img src="{{ asset($wishlist->produk->foto) }}" alt="{{ $wishlist->produk->nama_produk }}"
                                        class="offcanvas-wishlist-image">
                                </a>
                                <div class="offcanvas-wishlist-item-content">
                                    <a href="#" class="offcanvas-wishlist-item-link">{{ $wishlist->produk->nama_produk }}</a>
                                    <div class="offcanvas-wishlist-item-details">
                                        <span class="offcanvas-wishlist-item-details-price">Rp.
                                            {{ number_format($wishlist->produk->harga, 0, ',', '.') }}</span>
                                    </div>
                                </div>
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

<!-- Start Offcanvas Addcart Section -->
<div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div>
    <div class="offcanvas-add-cart-wrapper">
        <h4 class="offcanvas-title">Shopping Cart</h4>
        <ul class="offcanvas-cart">
            @guest
                <li class="offcanvas-cart-item-single">
                    <p class="text-center">Anda belum login, <a href="sesi/login">Klik Login</a></p>
                </li>
            @else
                @if ($keranjangItems->isEmpty())
                    <li class="offcanvas-cart-item-single">
                        <p class="text-center">Keranjang Anda kosong</p>
                    </li>
                @else
                    @foreach ($keranjangItems as $item)
                        <li class="offcanvas-cart-item-single">
                            <div class="offcanvas-cart-item-block">
                                <a href="#" class="offcanvas-cart-item-image-link">
                                    <img src="{{ asset($item->produk->foto) }}" alt="{{ $item->produk->nama_produk }}"
                                        class="offcanvas-cart-image">
                                </a>
                                <div class="offcanvas-cart-item-content">
                                    <a href="#" class="offcanvas-cart-item-link">{{ $item->produk->nama_produk }}</a>
                                    <div class="offcanvas-cart-item-details">
                                        <span class="offcanvas-cart-item-details-price">
                                            Rp. </span>
                                    </div>
                                </div>
                        </li>
                    @endforeach
                @endif
            @endguest
        </ul>
        <div class="offcanvas-cart-total-price">
            <span class="offcanvas-cart-total-price-text">Subtotal:</span>
            <span class="offcanvas-cart-total-price-value">Rp. </span>
        </div>
        <ul class="offcanvas-cart-action-button">
            <li><a href="/cart" class="btn btn-block btn-golden">View Cart</a></li>
            <li><a href="/checkout" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
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


<!-- PRODUKKKKK -->
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
                                    @foreach (App\Models\Produk::limit(6)->get() as $produk)
                                        <div class="product-default-single-item product-color--golden swiper-slide">
                                            <div class="image-box">
                                                <a href="/product-details-default" class="image-link">
                                                    <img src="{{ asset($produk->foto) }}" loading="lazy" alt="" width="640"
                                                        height="640">
                                                </a>
                                                <div class="action-link">
                                                    <div class="action-link-left">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modalAddcart">{{ $produk->nama_produk }}</a>
                                                    </div>
                                                    <div class="action-link-right">
                                                        <a href="#" class="add-to-wishlist"
                                                            data-produk-id="{{ $produk->id_produk }}">
                                                            <i
                                                                class="{{ Auth::user() && Auth::user()->wishlists->contains('produk_id', $produk->id_produk) ? 'fa-solid fa-heart' : 'icon-heart' }}"></i>
                                                        </a>

                                                        <a href="#" class="add-to-cart"
                                                            data-produk-id="{{ $produk->id_produk }}">
                                                            <i
                                                                class="{{ Auth::user() && Auth::user()->keranjangs->contains('produk_id', $produk->id_produk) ? 'fa-solid fa-shopping-cart' : 'icon-bag' }}"></i>
                                                        </a>
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
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




@include('home.layout.footer')
