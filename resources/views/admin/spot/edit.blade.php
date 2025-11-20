@extends('admin.layouts.app')
@section('content')

    <section class="admin-container">
        <h2>Edit Spot Foto</h2>
        <form action="{{ route('admin.spot.update', $spot->id) }}" method="POST" enctype="multipart/form-data"
            class="admin-form"> @csrf @method('PUT') <label>Judul</label> <input type="text" name="judul"
                value="{{ $spot->judul }}"> <label>Deskripsi</label> <textarea
                name="deskripsi">{{ $spot->deskripsi }}</textarea> <label>Gambar Baru</label> <input type="file"
                name="gambar">
            <p>Gambar sekarang</p> <img src="{{ asset($spot->gambar) }}" class="preview-img"> <button
                class="btn-para">Perbarui</button>
        </form>
</section> @endsection