@extends('admin.layouts.app')

@section('content')
<div class="admin-container">
    <h2>Daftar Menu</h2>
    <a href="{{ route('admin.menu.create') }}" class="btn-add">Tambah Menu</a>

    <table class="table-admin">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $m)
            <tr>
                <td><img src="{{ asset('images/uploads/' . $m->gambar) }}" class="thumb"></td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->kategori }}</td>
                <td>Rp {{ number_format($m->harga,0,',','.') }}</td>
                <td>
                    <a href="{{ route('admin.menu.edit', $m->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('admin.menu.destroy', $m->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn-del">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
