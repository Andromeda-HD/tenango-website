@extends('admin.layouts.app')

@section('content')

<h2>Dashboard Penjualan</h2>

<div class="charts-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;">

    <!-- Line chart total penjualan -->
    <div>
        <h3>Total Penjualan per Bulan</h3>
        <canvas id="chartTotalPenjualan" height="150"></canvas>
    </div>

    <!-- Pie chart kategori -->
    <div>
        <h3>Distribusi Penjualan per Kategori</h3>
        <canvas id="chartKategori" height="150"></canvas>
    </div>

    <!-- Top 5 produk terlaris -->
    <div>
        <h3>Top 5 Produk Terlaris</h3>
        <canvas id="chartTopProduk" height="150"></canvas>
    </div>

    <!-- 5 produk penjualan rendah -->
    <div>
        <h3>5 Produk dengan Penjualan Rendah</h3>
        <canvas id="chartLowProduk" height="150"></canvas>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
var ctxTotal = document.getElementById('chartTotalPenjualan').getContext('2d');
new Chart(ctxTotal, {
    type: 'line',
    data: {
        labels: @json($labels),
        datasets: [{
            label: 'Total Penjualan (Rp)',
            data: @json($totals),
            borderWidth: 2,
            borderColor: '#0A400C',
            backgroundColor: 'rgba(10,64,12,0.2)',
            fill: true
        }]
    },
    options: {
        scales: { y: { beginAtZero: true } }
    }
});

var ctxKategori = document.getElementById('chartKategori').getContext('2d');
new Chart(ctxKategori, {
    type: 'pie',
    data: {
        labels: @json($kategoriLabels),
        datasets: [{
            label: 'Distribusi Penjualan',
            data: @json($kategoriTotals),
            backgroundColor: ['#0A400C','#76af61','#ffd449']
        }]
    }
});

var ctxTop = document.getElementById('chartTopProduk').getContext('2d');
new Chart(ctxTop, {
    type: 'bar',
    data: {
        labels: @json($topLabels),
        datasets: [{
            label: 'Penjualan (Rp)',
            data: @json($topTotals),
            backgroundColor: '#0A400C'
        }]
    },
    options: { indexAxis: 'y', scales: { x: { beginAtZero: true } } }
});

var ctxLow = document.getElementById('chartLowProduk').getContext('2d');
new Chart(ctxLow, {
    type: 'bar',
    data: {
        labels: @json($lowLabels),
        datasets: [{
            label: 'Penjualan (Rp)',
            data: @json($lowTotals),
            backgroundColor: '#ffd449'
        }]
    },
    options: { indexAxis: 'y', scales: { x: { beginAtZero: true } } }
});
</script>

@endsection
