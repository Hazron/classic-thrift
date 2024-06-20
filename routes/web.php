<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishlistController;



Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

// Route::get('/cart', function () {
//     return view('cart');
// });

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

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/product-details-default', function () {
    return view('product-details-default');
});

Route::get('/shop-grid-sidebar-left', function () {
    return view('shop-grid-sidebar-left');
});

// Route::get('/wishlist', function () {
//     return view('wishlist');
// });

Route::get('/regis', function () {
    return view('regis');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/sesi/login', [SessionController::class, 'indexlogin'])->name('indexlogin');
    Route::post('/sesi/login', [SessionController::class, 'login'])->name('login');
    Route::get('/sesi/regis', [SessionController::class, 'indexregis'])->name('indexregis');
    Route::post('/sesi/regis', [SessionController::class, 'register'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

    Route::get('/my-account', function () {
        return view('my-account');
    })->name('my-account');
    Route::put('/profile/{id}', [DashboardController::class, 'update'])->name('profile.update');


    Route::get('/dashboard', [DashboardController::class, 'view'])->name('view');

    route::get('/wishlist', [WishlistController::class, 'dashboard'])->name('dashboard');
    Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::post('/wishlist/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');
    Route::delete('/wishlist/delete/{id}', [WishlistController::class, 'destroy'])->name('wishlist.delete');

    Route::get('/cart', [KeranjangController::class, 'dashboard'])->name('cart.index');
    Route::post('/cart/add', [KeranjangController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [KeranjangController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/destroy/{id}', [KeranjangController::class, 'destroy'])->name('cart.destroy');





    Route::get('/wishlist/count', function () {
        if (Auth::check()) {
            $count = Auth::user()->wishlists()->count();
            return response()->json(['count' => $count]);
        }
        return response()->json(['count' => 0]);
    });


});



Route::get('/', [HomeController::class, 'view'])->name('view');
Route::get('/shop', [ShopController::class, 'index'])->name('index');

