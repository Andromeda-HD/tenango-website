@extends('admin.layouts.app')

@section('content')
<div class="admin-container">
    <h2>Edit Menu</h2>

    <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nama</label>
        <input type="text" name="nama" value="{{ $menu->nama }}">

        <label>Kategori</label>
        <select name="kategori">
            <option value="kopi" {{ $menu->kategori=='kopi'?'selected':'' }}>Kopi</option>
            <option value="non_kopi" {{ $menu->kategori=='non_kopi'?'selected':'' }}>Non Kopi</option>
            <option value="snack" {{ $menu->kategori=='snack'?'selected':'' }}>Snack</option>
        </select>

        <label>Harga</label>
        <input type="number" name="harga" value="{{ $menu->harga }}">

        <label>Deskripsi</label>
        <textarea name="deskripsi">{{ $menu->deskripsi }}</textarea>

        <label>Gambar Baru</label>
        <input type="file" name="gambar">

        <button class="btn-submit">Update</button>
    </form>
</div>
@endsection
