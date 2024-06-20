@include('home.layout.navbar')

<div class="offcanvas-overlay"></div>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Wishlist</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Wishlist Section:::... -->
<div class="wishlist-section">
    <!-- Start Cart Table -->
    <div class="wishlish-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-12 mb-8">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_stock">Stock Status</th>
                                        <th class="product_addcart">Add To Cart</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    @foreach ($wishlists as $wishlist)
                                        <tr>
                                            <td class="product_remove">
                                                <form action="{{ route('wishlist.delete', $wishlist->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link"
                                                        onclick="return confirm('Are you sure you want to delete this item from the wishlist?');">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="product_thumb"><a
                                                    href="/product-details-default?id={{ $wishlist->produk->id_produk }}"><img
                                                        src="{{ asset($wishlist->produk->foto) }}" alt=""></a></td>
                                            <td class="product_name"><a
                                                    href="/product-details-default">{{ $wishlist->produk->nama_produk }}</a>
                                            </td>
                                            <td class="product-price">
                                                {{ 'Rp. ' . number_format($wishlist->produk->harga, 0, ',', '.') }}
                                            </td>
                                            <td class="product_stock">
                                                {{ $wishlist->produk->stok > 0 ? 'In Stock' : 'Out of Stock' }}
                                            </td>
                                            <td class="product_addcart"><a
                                                    href="{{ route('cart.add', $wishlist->produk->id_produk) }}"
                                                    class="btn btn-md btn-golden" data-bs-toggle="modal"
                                                    data-bs-target="#modalAddcart">Add To Cart</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->
</div> <!-- ...:::: End Wishlist Section:::... -->

<!-- Start Footer Section -->
<footer class="footer-section footer-bg">
    <div class="footer-wrapper">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="0">
                            <h5 class="title">INFORMATION</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Shipping Information</a></li>

                                <li><a href="/contact-us">Contact</a></li>

                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="200">
                            <h5 class="title">MY ACCOUNT</h5>
                            <ul class="footer-nav">

                                <li><a href="/wishlist">Wishlist</a></li>
                                <li><a href="/privacy-policy">Security</a></li>
                                <li><a href="/faq">FAQ</a></li>

                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="400">
                            <h5 class="title">CATEGORIES</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Shoes</a></li>

                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                            data-aos-delay="600">
                            <h5 class="title">ABOUT US</h5>
                            <div class="footer-about">
                                <p>We, Group 2, created a ClassicThrift website for the PWEB2 Project
                                </p>

                                <address class="address">
                                    <span>Address: Jl. Mendalo</span>
                                    <span>Email: ClassicThrift@gmail.com</span>
                                </address>
                            </div>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                </div>
            </div>
        </div>
        @include('home.layout.footer')
