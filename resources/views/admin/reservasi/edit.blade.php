@extends('admin.layouts.app')

@section('content')
<h2 class="page-title">Edit Reservasi</h2>

<form action="{{ route('admin.reservasi.update', $res->id) }}" method="POST" class="form-card">
  @csrf
  @method('PUT')

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="name" value="{{ $res->name }}">
  </div>

  <div class="form-group">
    <label>Telepon</label>
    <input type="text" name="phone" value="{{ $res->phone }}">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" value="{{ $res->email }}">
  </div>

  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" name="date" value="{{ $res->date }}">
  </div>

  <div class="form-group">
    <label>Waktu</label>
    <input type="time" name="time" value="{{ $res->time }}">
  </div>

  <div class="form-group">
    <label>Jumlah Tamu</label>
    <input type="number" name="guests" value="{{ $res->guests }}">
  </div>

  <div class="form-group">
    <label>Catatan</label>
    <textarea name="note">{{ $res->note }}</textarea>
  </div>

  <button type="submit" class="btn-primary">Simpan</button>
</form>
@endsection
