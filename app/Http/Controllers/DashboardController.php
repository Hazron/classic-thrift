<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\User;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function view()
    {
        $user = Auth::user();

        if ($user) {
            $wishlistCount = Wishlist::where('user_id', $user->id)->count();
            $wishlistItems = Wishlist::where('user_id', $user->id)->with('produk')->get();
            $keranjangItems = Keranjang::where('user_id', $user->id)->with('produk')->get();

            return view('home.dashboard', [
                'wishlistCount' => $wishlistCount,
                'wishlistItems' => $wishlistItems,
                'keranjangItems' => $keranjangItems,
            ]);
        } else {
            return view('home.dashboard', [
                'wishlistCount' => 'Anda belum login, klik login',
                'wishlistItems' => [],
                'keranjangItems' => [],
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;

        $user->save();

        return redirect('/dashboard#account-details')->with('success', 'Profile updated!');
    }
}

