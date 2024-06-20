@include('home.layout.navbar')

<div class="offcanvas-overlay"></div>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Cart</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Cart Section:::... -->
<div class="cart-section">
    <!-- Start Cart Table -->
    <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keranjangs as $keranjang)
                                        <tr>
                                            <td>
                                                <form action="{{ route('cart.destroy', $keranjang->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                            <td class="product_thumb"><a href="/product-details-default"><img
                                                        src="{{ asset('storage/images/products/' . $keranjang->produk->foto) }}"
                                                        alt=""></a></td>
                                            <td class="product_name"><a
                                                    href="/product-details-default">{{ $keranjang->produk->nama_produk }}</a>
                                            </td>
                                            <td class="product_price">
                                                Rp. {{ number_format($keranjang->produk->harga, 0, ',', '.') }}
                                            </td>
                                            <td class="product_total">
                                                Rp. {{ number_format($keranjang->total_harga, 0, ',', '.') }}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button class="btn btn-md btn-golden" wire:click="updateCart" type="submit">Update
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                    </div>
                    <div class="col-lg-6 col-md-6 mb-8">
                        <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal: Rp. {{ number_format($subtotal, 0, ',', '.') }}</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span> Rp. 2000</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="#" class="btn btn-md btn-golden" wire:click="checkout">Proceed to
                                        Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> <!-- ...:::: End Cart Section:::... -->


    @include('home.layout.footer')
