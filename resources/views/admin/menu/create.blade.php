@extends('admin.layouts.app')

@section('content')
<div class="admin-container">
    <h2>Tambah Menu</h2>

    <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama">

        <label>Kategori</label>
        <select name="kategori">
            <option value="kopi">Kopi</option>
            <option value="non_kopi">Non Kopi</option>
            <option value="snack">Snack</option>
        </select>

        <label>Harga</label>
        <input type="number" name="harga">

        <label>Deskripsi</label>
        <textarea name="deskripsi"></textarea>

        <label>Gambar</label>
        <input type="file" name="gambar">

        <button class="btn-submit">Simpan</button>
    </form>
</div>
@endsection
