@extends('layouts.app')

@section('content')

<section class="menu-section container">

    <h2 class="menu-title">Menu Tenango Cafe</h2>


    {{-- KOPI --}}
    <h3 class="menu-sub">Kopi</h3>
    <div class="menu-grid">
        @foreach($kopi as $item)
        <div class="menu-card">
            <img src="{{ asset('images/uploads/' . $item->gambar) }}" alt="{{ $item->nama }}">
            <h4>{{ $item->nama }}</h4>
            <p>{{ $item->deskripsi }}</p>
            <div class="harga">Rp {{ number_format($item->harga) }}</div>
        </div>
        @endforeach
    </div>


    {{-- NON KOPI --}}
    <h3 class="menu-sub">Non Kopi</h3>
    <div class="menu-grid">
        @foreach($non_kopi as $item)
        <div class="menu-card">
            <img src="{{ asset('images/uploads/' . $item->gambar) }}" alt="{{ $item->nama }}">
            <h4>{{ $item->nama }}</h4>
            <p>{{ $item->deskripsi }}</p>
            <div class="harga">Rp {{ number_format($item->harga) }}</div>
        </div>
        @endforeach
    </div>


    {{-- SNACK --}}
    <h3 class="menu-sub">Snack</h3>
    <div class="menu-grid">
        @foreach($snack as $item)
        <div class="menu-card">
            <img src="{{ asset('images/uploads/' . $item->gambar) }}" alt="{{ $item->nama }}">
            <h4>{{ $item->nama }}</h4>
            <p>{{ $item->deskripsi }}</p>
            <div class="harga">Rp {{ number_format($item->harga) }}</div>
        </div>
        @endforeach
    </div>

</section>

@endsection
