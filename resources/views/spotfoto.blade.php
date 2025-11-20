@extends('layouts.app')

@section('content')

<section class="spot-hero">

  <div class="spot-hero-inner">

    <h2 class="spot-hero-title">Spot Foto Tenango</h2>
    <p class="spot-hero-sub">Galeri spot favorit untuk foto pengunjung.</p>

    <div class="spot-hero-grid">

      @foreach($spot as $item)
      <div class="spot-hero-card">

        <img src="{{ asset($item->gambar) }}">

        <div class="spot-hero-card-info">
          <h3 class="spot-hero-card-title">{{ $item->judul }}</h3>
          <p class="spot-hero-card-desc">{{ $item->deskripsi }}</p>
        </div>

      </div>
      @endforeach

    </div>

    <p class="spot-hero-note">Untuk sesi foto privat silakan hubungi kami.</p>

  </div>

</section>


@endsection
