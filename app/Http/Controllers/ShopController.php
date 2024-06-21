<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Sesuaikan dengan namespace dan model produk yang sebenarnya
use App\Models\Wishlist;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $products = Produk::take(6)->get();
        $wishlistItems = [];
        $keranjangItems = [];
        $subtotal = 0;

        $user = Auth::user();
        if ($user) {
            $wishlistItems = Wishlist::where('user_id', $user->id)->with('produk')->get();
            $keranjangItems = Keranjang::where('user_id', $user->id)->with('produk')->get();
            $subtotal = $keranjangItems->sum(function ($item) {
                return $item->produk->harga;
            });
        }

        return view('home.shop', [
            'products' => $products,
            'wishlistItems' => $wishlistItems,
            'keranjangItems' => $keranjangItems,
            'subtotal' => $subtotal,
        ]);
    }
}
