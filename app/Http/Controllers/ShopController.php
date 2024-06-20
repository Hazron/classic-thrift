<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Sesuaikan dengan namespace dan model produk yang sebenarnya

class ShopController extends Controller
{
    public function index()
    {
        // Ambil 6 produk terbaru atau sesuai kriteria tertentu
        $products = Produk::take(6)->get();

        return view('home.shop', compact('products'));
    }
}
