<?php
namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    protected $model = Produk::class;

    public function definition()
    {
        return [
            'nama_produk' => $this->faker->word,
            'harga' => $this->faker->randomFloat(2, 1000, 1000000),
            'deskripsi' => $this->faker->paragraph,
            'stok' => $this->faker->numberBetween(1, 100),
            'foto' => $this->faker->imageUrl(640, 480, 'products', true), 
        ];
    }
}
