<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // 3 kopi
        Menu::create([
            'nama' => 'Espresso Single Shot',
            'kategori' => 'kopi',
            'harga' => 20000,
            'deskripsi' => 'Espresso original dengan biji premium Tenango.',
            'gambar' => 'images/uploads/espresso.jpg'
        ]);

        Menu::create([
            'nama' => 'Cappuccino',
            'kategori' => 'kopi',
            'harga' => 28000,
            'deskripsi' => 'Cappuccino creamy dengan foam lembut.',
            'gambar' => 'images/uploads/cappuccino.jpg'
        ]);

        Menu::create([
            'nama' => 'Latte Caramel',
            'kategori' => 'kopi',
            'harga' => 32000,
            'deskripsi' => 'Latte dengan sirup karamel homemade.',
            'gambar' => 'images/uploads/caramel_latte.jpg'
        ]);

        // 3 non kopi
        Menu::create([
            'nama' => 'Matcha Latte',
            'kategori' => 'non_kopi',
            'harga' => 28000,
            'deskripsi' => 'Matcha premium dengan susu segar.',
            'gambar' => 'images/uploads/matcha.jpg'
        ]);

        Menu::create([
            'nama' => 'Lemon Tea',
            'kategori' => 'non_kopi',
            'harga' => 18000,
            'deskripsi' => 'Teh lemon segar.',
            'gambar' => 'images/uploads/lemon_tea.jpg'
        ]);

        Menu::create([
            'nama' => 'Chocolate Ice',
            'kategori' => 'non_kopi',
            'harga' => 25000,
            'deskripsi' => 'Minuman coklat dingin manis.',
            'gambar' => 'images/uploads/choco.jpg'
        ]);

        // 3 snack
        Menu::create([
            'nama' => 'French Fries',
            'kategori' => 'snack',
            'harga' => 22000,
            'deskripsi' => 'Kentang goreng crispy.',
            'gambar' => 'images/uploads/fries.jpg'
        ]);

        Menu::create([
            'nama' => 'Churros Mini',
            'kategori' => 'snack',
            'harga' => 28000,
            'deskripsi' => 'Churros kecil dengan saus coklat.',
            'gambar' => 'images/uploads/churros.jpg'
        ]);

        Menu::create([
            'nama' => 'Banana Nugget',
            'kategori' => 'snack',
            'harga' => 25000,
            'deskripsi' => 'Nugget pisang topping coklat.',
            'gambar' => 'images/uploads/banana_nugget.jpg'
        ]);
    }
}
