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
            'name' => 'Bakso Bakar',
            'category' => 'Bakso',
            'description' => 'Makanan dengan daging sapi yang dipanggang dengan bumbu spesial.',
            'image' => 'bakso (1).jpeg'
        ]);

        MenuItem::create([
            'name' => 'onigiri',
            'category' => 'nasi rumput laut',
            'description' => 'campuran nasi dengan sayur dan rumput laut.',
            'image' => 'makanan (1).jpeg'
        ]);

        MenuItem::create([
            'name' => 'risol',
            'category' => 'gorengan',
            'description' => 'risol dengan isi sayur dan mayo.',
            'image' => 'download (4).jpeg'
        ]);

        MenuItem::create([
            'name' => 'sushi',
            'category' => 'rumput laut dengan isi nasi',
            'description' => 'campuran rumput laut dan daging dan ikan.',
            'image' => 'makanan (3).jpeg'
        ]);
    }
}
