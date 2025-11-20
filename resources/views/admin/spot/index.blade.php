@extends('admin.layouts.app')
@section('content')

    <section class="admin-container">
        <div class="admin-header">
            <h2>Manajemen Spot Foto</h2> <a href="{{ route('admin.spot.create') }}" class="btn-para">Tambah Spot</a>
        </div>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody> @foreach($spot as $s) <tr>
                <td><img src="{{ asset($s->gambar) }}" class="table-img"></td>
                <td>{{ $s->judul }}</td>
                <td>{{ $s->deskripsi }}</td>
                <td> <a href="{{ route('admin.spot.edit', $s->id) }}">Edit</a>
                    <form action="{{ route('admin.spot.destroy', $s->id) }}" method="POST" class="inline-form">
                        @csrf @method('DELETE') <button type="submit" class="btn-delete">Hapus</button> </form>
                </td>
            </tr> @endforeach </tbody>
        </table>
</section> @endsection