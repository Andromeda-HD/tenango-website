<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $kopi = Menu::where('kategori', 'kopi')->get();
        $non_kopi = Menu::where('kategori', 'non_kopi')->get();
        $snack = Menu::where('kategori', 'snack')->get();

        return view('menu', compact('kopi', 'non_kopi', 'snack'));
    }
}
