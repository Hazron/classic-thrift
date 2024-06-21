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
                                    <img src="{{ asset($wishlist->produk->foto) }}"
                                        alt="{{ $wishlist->produk->nama_produk }}" class="offcanvas-wishlist-image">
                                </a>
                                <div class="offcanvas-wishlist-item-content">
                                    <a href="#"
                                        class="offcanvas-wishlist-item-link">{{ $wishlist->produk->nama_produk }}</a>
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


<!-- ...:::: Start Shop Section:::... -->
<div class="shop-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <!-- Start Sidebar Area -->
                <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">CATEGORIES</h6>
                        <div class="sidebar-content">
                            <ul class="sidebar-menu">
                                <li>
                                    <ul class="sidebar-menu-collapse">
                                        <li class="sidebar-menu-collapse-list">
                                            <div class="accordion">
                                                <a href="#" class="accordion-title collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#men-fashion"
                                                    aria-expanded="false">T-Shirts</a>
                                                <div id="men-fashion" class="collapse">

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"> Shirts</a></li>
                                <li><a href="#"> Bags</a></li>
                                <li><a href="#"> Shoes</a></li>
                                <li><a href="#"> Trousers</a></li>

                            </ul>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                </div> <!-- End Sidebar Area -->
            </div>
            <div class="col-lg-9">
                <!-- Start Shop Product Sorting Section -->
                <div class="shop-sort-section">
                    <div class="container">
                        <div class="row">
                            <!-- Start Sort Wrapper Box -->
                            <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                data-aos="fade-up" data-aos-delay="0">
                                <!-- Start Sort tab Button -->
                                <div class="sort-tablist d-flex align-items-center">
                                    <ul class="tablist nav sort-tab-btn">
                                        <li><a class="nav-link active" data-bs-toggle="tab" href="#layout-3-grid"><img
                                                    src="images/icons/bkg_grid.png" alt=""></a></li>
                                        <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                    src="images/icons/bkg_list.png" alt=""></a></li>
                                    </ul>

                                    <!-- Start Page Amount -->
                                    <div class="page-amount ml-2">
                                        <span>Showing 1–1 of 4 results</span>
                                    </div> <!-- End Page Amount -->
                                </div> <!-- End Sort tab Button -->

                            </div> <!-- Start Sort Wrapper Box -->
                        </div>
                    </div>
                </div> <!-- End Section Content -->

                <!-- Start Tab Wrapper -->
                <div class="sort-product-tab-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content tab-animate-zoom">
                                    <!-- Start Grid View Product -->
                                    <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                        <div class="row">


                                            @foreach ($products as $product)
                                                <div class="col-xl-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="/product-details-default" class="image-link">
                                                                <img src="{{ asset($product->foto) }}" loading="lazy"
                                                                    alt="">
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalAddcart">Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" class="add-to-wishlist"
                                                                        data-produk-id="{{ $product->id_produk }}">
                                                                        <i
                                                                            class="{{ Auth::check() && Auth::user()->wishlists->contains('produk_id', $product->id_produk) ? 'fa-solid fa-heart' : 'icon-heart' }}"></i>
                                                                    </a>

                                                                    <a href="#" class="add-to-cart"
                                                                        data-produk-id="{{ $product->id_produk }}">
                                                                        <i
                                                                            class="{{ Auth::check() && Auth::user()->keranjangs->contains('produk_id', $product->id_produk) ? 'fa-solid fa-shopping-cart' : 'icon-bag' }}"></i>
                                                                    </a>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="/product-details-default">{{ $product->nama_produk }}</a>
                                                                </h6>
                                                                <!-- Ganti dengan field yang sesuai di model Produk -->
                                                            </div>
                                                            <div class="content-right">
                                                                <span class="price">Rp. {{ $product->harga }}</span>
                                                                <!-- Ganti dengan field yang sesuai di model Produk -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                            @endforeach


                                            <div class="col-xl-4 col-sm-6 col-12">
                                                <!-- Start Product  -->

                                            </div>
                                        </div>
                                    </div>
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
