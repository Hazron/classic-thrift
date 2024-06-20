<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/compare', function () {
    return view('compare');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/product-details-default', function () {
    return view('product-details-default');
});

Route::get('/shop-grid-sidebar-left', function () {
    return view('shop-grid-sidebar-left');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/regis', function () {
    return view('regis');
});