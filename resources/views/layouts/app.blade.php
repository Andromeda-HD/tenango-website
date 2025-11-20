<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenango Cafe</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

<header>
    <nav class="container nav-bar">
        <h1 class="logo">Tenango/'''''\</h1>

        <ul>
            <li><a href="/" class="nav-link">Home</a></li>
            <li><a href="/menu" class="nav-link">Menu</a></li>
            <li><a href="/reservasi" class="nav-link">Reservasi</a></li>
            <li><a href="/spot-foto" class="nav-link">Spot Foto</a></li>
            <li><a href="/event" class="nav-link">Event</a></li>
            <li><a href="/tentang" class="nav-link">Tentang</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="footer-grid container">

        <div>
            <div class="logo">Tenango</div>
            <p>Kafe bernuansa hutan yang dekat dengan danau, menyediakan pengalaman bersantai yang nyaman.</p>
        </div>

        <div>
            <div class="footer-title">Navigasi</div>
            <a href="/">Home</a>
            <a href="/menu">Menu</a>
            <a href="/reservasi">Reservasi</a>
            <a href="/event">Event</a>
            <a href="/tentang">Tentang</a>
            <a href="/kontak">Kontak</a>
        </div>

        <div>
            <div class="footer-title">Kontak</div>
            <p>Jl. Betapus No. 18, Samarinda</p>
            <p>0822 3456 7788</p>
            <p>tenango.cafe@email.com</p>
        </div>

    </div>

    <div class="text-center text-xs mt-8 opacity-80" style="text-align:center;margin-top:2rem;">
        Copyright 2025 Tenango Cafe
    </div>
</footer>

</body>
</html>
