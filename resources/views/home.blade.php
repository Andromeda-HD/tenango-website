@extends('layouts.app')
@section('content')

    <section class="hero" style="background-image:url('/images/hero.jpg');">
        <div class="overlay" style="background:transparent;">
            <h2>Kopi Di Tepi Danau</h2>
            <p>Suasana hutan. Udara segar. Tempat yang tenang untukmu.</p> <a href="/reservasi" class="btn-para">Reservasi
                Sekarang</a>
        </div>
    </section>
    <section class="sub-hero">
        <div class="sub-hero-img" style="background-image:url('/images/menu-preview.jpg');"></div>
        <div class="section-text">
            <h3>Menu</h3>
            <p>Pilihan kopi dengan biji segar, pastry, serta minuman signature.</p> <a href="/menu" class="btn-para">Lihat
                Menu</a>
        </div>
    </section>
    <section class="sub-hero">
        <div class="sub-hero-img" style="background-image:url('/images/spot-foto-preview.jpg');"></div>
        <div class="section-text">
            <h3>Spot Foto</h3>
            <p>Area outdoor dekat danau dengan dekorasi hutan.</p> <a href="/spot-foto" class="btn-para">Jelajahi</a>
        </div>
    </section>
    <section class="sub-hero">
        <div class="sub-hero-img" style="background-image:url('/images/event-preview.jpg');"></div>
        <div class="section-text">
            <h3>Event</h3>
            <p>Paket private event. Live music, gathering, ulang tahun, hingga intimate wedding.</p> <a href="/event"
                class="btn-para">Lihat Event</a>
        </div>
    </section>

@endsection