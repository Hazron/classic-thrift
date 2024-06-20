<?php
namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        // Membuat 50 produk dummy
        Produk::factory()->count(50)->create();
    }
}
