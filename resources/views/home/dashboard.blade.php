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
                                        <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                        <span class="offcanvas-cart-item-details-price">Rp.
                                            {{ number_format($item->total_harga, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="offcanvas-cart-item-delete text-right">
                                <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </li>
                    @endforeach
                @endif
            @endguest
        </ul>
        <div class="offcanvas-cart-total-price">
            <span class="offcanvas-cart-total-price-text">Subtotal:</span>
            <span class="offcanvas-cart-total-price-value">Rp.
                {{ number_format($keranjangItems->sum('total_harga'), 0, ',', '.') }}</span>
        </div>
        <ul class="offcanvas-cart-action-button">
            <li><a href="/cart" class="btn btn-block btn-golden">View Cart</a></li>
            <li><a href="/checkout" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
        </ul>
    </div>
</div>

<!-- ...:::: Start Account Dashboard Section:::... -->
<div class="account-dashboard mt-6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <!-- Nav tabs -->
                <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                    <ul role="tablist" class="nav flex-column dashboard-list">
                        <li><a href="#dashboard" data-bs-toggle="tab"
                                class="nav-link btn btn-block btn-md btn-black-default-hover active">Dashboard</a>
                        </li>

                        <li><a href="/cart" class="nav-link btn btn-block btn-md btn-black-default-hover">keranjang</a>
                        </li>

                        <li> <a href="#orders" data-bs-toggle="tab"
                                class="nav-link btn btn-block btn-md btn-black-default-hover">Riwayat Orders</a></li>

                        <li><a href="#account-details" data-bs-toggle="tab"
                                class="nav-link btn btn-block btn-md btn-black-default-hover">Account details</a>
                        </li>


                        <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="nav-link btn btn-block btn-md btn-black-default-hover">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade show active" id="dashboard">
                        <h4>Dashboard </h4>
                        <p> Selamat Datang di Website ClassicThrift </p>
                    </div>

                    <!-- Order -->
                    <div class="tab-pane fade" id="orders">
                        <h4>Orders</h4>
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jun 11, 2024</td>
                                        <td><span class="success">Completed</span></td>
                                        <td>Rp. 5 for 1 item </td>
                                        <td><a href="/cart" class="view">view</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jun 13, 2024</td>
                                        <td>Processing</td>
                                        <td>Rp. 5 for 1 item </td>
                                        <td><a href="/cart" class="view">view</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Order -->

                    <div class="tab-pane fade" id="account-details">
                        <h3>Account details </h3>
                        <div class="login">
                            <div class="login_form_container">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="account_login_form">
                                    <form action="/profile/{{Auth::user()->id}}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="default-form-box mb-20">
                                            <label>Full Name</label>
                                            <input type="text" name="name" value="{{Auth::user()->name}}">
                                        </div>

                                        <div class="default-form-box mb-20">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{Auth::user()->email}}">
                                        </div>

                                        <div class="default-form-box mb-20">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" value="{{Auth::user()->alamat}}">
                                        </div>

                                        <div class="save_button mt-3">
                                            <button class="btn btn-md btn-black-default-hover"
                                                type="submit">Save</button>
                                        </div>
                                    </form>
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
