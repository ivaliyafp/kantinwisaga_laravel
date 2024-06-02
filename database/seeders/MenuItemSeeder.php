<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuItem::create([
            'nama_makanan' => 'Baso bakar',
            'jenis_makanan' => 'gorengan',
            'harga_makanan' => 1500,
            'jumlah_makanan' => 10,
            'stok' => 100,
            'gambar' => 'bakso (1).jpeg'
        ]);

        MenuItem::create([
            'nama_makanan' => 'dimsum',
            'jenis_makanan' => 'makanan',
            'harga_makanan' => 2000,
            'jumlah_makanan' => 10,
            'stok' => 100,
            'gambar' => 'makanan (2).jpeg'
        ]);

        MenuItem::create([
            'nama_makanan' => 'sushi',
            'jenis_makanan' => 'makanan',
            'harga_makanan' => 3000,
            'jumlah_makanan' => 10,
            'stok' => 100,
            'gambar' => 'makanan (3).jpeg'
        ]);

        MenuItem::create([
            'nama_makanan' => 'risol',
            'jenis_makanan' => 'makanan',
            'harga_makanan' => 3000,
            'jumlah_makanan' => 10,
            'stok' => 100,
            'gambar' => 'download (4).jpeg'
        ]);

        MenuItem::create([
            'nama_makanan' => 'sus',
            'jenis_makanan' => 'makanan',
            'harga_makanan' => 2000,
            'jumlah_makanan' => 10,
            'stok' => 100,
            'gambar' => 'Yummy.jpeg'
        ]);
    }
}
