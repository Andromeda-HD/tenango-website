<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use Carbon\Carbon;
use DB;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Labels bulan
        $labels = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

        // Total penjualan per bulan
        $sales = Sale::select(
            DB::raw('MONTH(date) as month'),
            DB::raw('SUM(quantity * menus.harga) as total')
        )
        ->join('menus', 'menus.id', '=', 'sales.menu_id')
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $totals = [];
        foreach ($labels as $index => $label) {
            $month = $index + 1;
            $totals[] = $sales->firstWhere('month', $month)->total ?? 0;
        }

        // Penjualan per kategori
        $kategoriSales = Sale::select(
            'menus.kategori',
            DB::raw('SUM(quantity) as total')
        )
        ->join('menus', 'menus.id', '=', 'sales.menu_id')
        ->groupBy('menus.kategori')
        ->get();

        $kategoriLabels = $kategoriSales->pluck('kategori');
        $kategoriTotals = $kategoriSales->pluck('total');

        // Top 5 produk terlaris
        $topProduk = Sale::select(
            'menus.nama',
            DB::raw('SUM(quantity) as total')
        )
        ->join('menus','menus.id','=','sales.menu_id')
        ->groupBy('menus.nama')
        ->orderByDesc('total')
        ->limit(5)
        ->get();

        $topLabels = $topProduk->pluck('nama');
        $topTotals = $topProduk->pluck('total');

        // 5 produk dengan penjualan rendah
        $lowProduk = Sale::select(
            'menus.nama',
            DB::raw('SUM(quantity) as total')
        )
        ->join('menus','menus.id','=','sales.menu_id')
        ->groupBy('menus.nama')
        ->orderBy('total')
        ->limit(5)
        ->get();

        $lowLabels = $lowProduk->pluck('nama');
        $lowTotals = $lowProduk->pluck('total');

        return view('admin.dashboard', compact(
            'labels','totals',
            'kategoriLabels','kategoriTotals',
            'topLabels','topTotals',
            'lowLabels','lowTotals'
        ));
    }
}
