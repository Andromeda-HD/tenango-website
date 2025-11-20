@extends('layouts.app')

@section('content')
<section class="container" style="padding-top:120px;padding-bottom:40px;max-width:760px">
  <h2>Kontak Tenango</h2>
  <p>Hubungi kami untuk reservasi, event, atau pertanyaan umum.</p>

  <div style="display:flex;gap:28px;margin-top:18px">
    <div style="flex:1">
      <h4>Alamat</h4>
      <p>Jl. Betapus No. 18, Samarinda</p>

      <h4 style="margin-top:12px">Telepon</h4>
      <p>0822 3456 7788</p>

      <h4 style="margin-top:12px">Email</h4>
      <p>tenango.cafe@email.com</p>
    </div>

    <div style="flex:1">
      <h4>Kirim Pesan</h4>
      <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="name" required style="width:100%;padding:10px;margin-bottom:8px;border-radius:6px">
        <label>Email</label>
        <input type="email" name="email" required style="width:100%;padding:10px;margin-bottom:8px;border-radius:6px">
        <label>Pesan</label>
        <textarea name="message" rows="4" required style="width:100%;padding:10px;border-radius:6px;margin-bottom:8px"></textarea>
        <button class="btn-para" type="submit">Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>
@endsection
