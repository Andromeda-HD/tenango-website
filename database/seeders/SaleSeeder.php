<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SaleSeeder extends Seeder
{
    public function run(): void
    {
        $menus = Menu::all();

        foreach ($menus as $menu) {
            // buat penjualan dummy untuk 6 bulan terakhir
            for ($i = 1; $i <= 6; $i++) {
                Sale::create([
                    'menu_id' => $menu->id,
                    'quantity' => rand(100, 500),
                    'date' => Carbon::now()->subMonths(6 - $i)->format('Y-m-d'),
                ]);
            }
        }
    }
}
