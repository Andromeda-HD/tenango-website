@extends('layouts.app')

@section('content')
<section class="reservation-container">

  <h2 class="reservation-title">Reservasi Meja</h2>
  <p class="reservation-subtitle">Isi formulir untuk memesan meja. Kami akan menghubungi Anda untuk konfirmasi.</p>

  @if ($errors->any())
    <div class="alert-error">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  @if (session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('reservasi.store') }}" method="POST" class="reservation-form">
    @csrf

    <div class="form-group">
      <label>Nama lengkap</label>
      <input type="text" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group">
      <label>Telepon</label>
      <input type="text" name="phone" value="{{ old('phone') }}" required>
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
      <label>Tanggal kunjungan</label>
      <input type="date" name="date" value="{{ old('date') }}" required>
    </div>

    <div class="form-group">
      <label>Waktu</label>
      <input type="time" name="time" value="{{ old('time') }}" required>
    </div>

    <div class="form-group">
      <label>Jumlah tamu</label>
      <input type="number" name="guests" min="1" max="30" required value="{{ old('guests', 2) }}">
    </div>

    <div class="form-group">
      <label>Catatan tambahan</label>
      <textarea name="note" rows="3">{{ old('note') }}</textarea>
    </div>

    <button type="submit" class="btn-reservasi">Kirim Reservasi</button>
  </form>

</section>
@endsection
