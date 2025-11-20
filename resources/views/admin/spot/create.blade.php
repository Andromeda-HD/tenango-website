@extends('admin.layouts.app')
@section('content')

    <section class="admin-container">
        <h2>Tambah Spot Foto</h2>
        <form action="{{ route('admin.spot.store') }}" method="POST" enctype="multipart/form-data" class="admin-form">
            @csrf <label>Judul</label> <input type="text" name="judul"> <label>Deskripsi</label> <textarea
                name="deskripsi"></textarea> <label>Gambar</label> <input type="file" name="gambar"> <button
                class="btn-para">Simpan</button> </form>
</section> @endsection