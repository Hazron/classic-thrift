<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi',
        'stok',
        'foto'
    ];

    // Tambahkan relasi atau method lain jika diperlukan

    // Contoh relasi jika ada relasi dengan Wishlist
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'produk_id', 'id_produk');
    }
}
