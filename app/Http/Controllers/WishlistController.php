<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function add(Request $request)
    {
        if (Auth::check()) {
            $produkId = $request->input('produk_id');
            $userId = Auth::id();

            $wishlist = Wishlist::where('produk_id', $produkId)->where('user_id', $userId)->first();
            if (!$wishlist) {
                Wishlist::create([
                    'produk_id' => $produkId,
                    'user_id' => $userId,
                ]);

                return response()->json(['status' => 'success', 'message' => 'Product added to wishlist']);
            }

            return response()->json(['status' => 'info', 'message' => 'Product is already in your wishlist']);
        }

        return response()->json(['status' => 'error', 'message' => 'You must be logged in to add products to your wishlist']);
    }

    public function remove(Request $request)
    {
        if (Auth::check()) {
            $produkId = $request->input('produk_id');
            $userId = Auth::id();

            $wishlist = Wishlist::where('produk_id', $produkId)->where('user_id', $userId)->first();
            if ($wishlist) {
                $wishlist->delete();

                return response()->json(['status' => 'success', 'message' => 'Product removed from wishlist']);
            }

            return response()->json(['status' => 'info', 'message' => 'Product is not in your wishlist']);
        }

        return response()->json(['status' => 'error', 'message' => 'You must be logged in to remove products from your wishlist']);
    }


    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return redirect()->back()->with('status', 'Product removed from wishlist');
    }

    public function dashboard()
    {
        $wishlists = Wishlist::where('user_id', Auth::id())->get();

        return view('wishlist', compact('wishlists'));
    }
}
