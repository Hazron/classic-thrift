<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function add(Request $request)
    {
        if (Auth::check()) {
            $produkId = $request->input('produk_id');
            $userId = Auth::id();

            $cart = Keranjang::where('produk_id', $produkId)->where('user_id', $userId)->first();
            if (!$cart) {
                Keranjang::create([
                    'produk_id' => $produkId,
                    'user_id' => $userId,
                    'quantity' => 1,
                ]);

                return response()->json(['status' => 'success', 'message' => 'Product added to cart']);
            }

            return response()->json(['status' => 'info', 'message' => 'Product is already in your cart']);
        }

        return response()->json(['status' => 'error', 'message' => 'You must be logged in to add products to your cart']);
    }

    public function remove(Request $request)
    {
        if (Auth::check()) {
            $produkId = $request->input('produk_id');
            $userId = Auth::id();

            $cart = Keranjang::where('produk_id', $produkId)->where('user_id', $userId)->first();
            if ($cart) {
                $cart->delete();

                return response()->json(['status' => 'success', 'message' => 'Product removed from cart']);
            }

            return response()->json(['status' => 'info', 'message' => 'Product is not in your cart']);
        }

        return response()->json(['status' => 'error', 'message' => 'You must be logged in to remove products from your cart']);
    }

    public function dashboard()
    {
        $keranjangs = Keranjang::where('user_id', Auth::id())->with('produk')->get();

        // Hitung subtotal
        $subtotal = $keranjangs->sum(function ($keranjang) {
            return $keranjang->produk->harga * $keranjang->jumlah;
        });

        return view('cart', compact('keranjangs', 'subtotal'));
    }


    public function destroy($id)
    {
        $keranjang = Keranjang::find($id);
        if ($keranjang) {
            $keranjang->delete();
            session()->flash('message', 'Item removed from cart.');
        }
        return redirect()->route('cart.index');
    }
}
