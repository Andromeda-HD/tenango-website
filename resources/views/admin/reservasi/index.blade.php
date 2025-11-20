@extends('admin.layouts.app')

@section('content')
<div class="admin-wrapper">

  <h2 class="admin-title">Data Reservasi</h2>

  <table class="admin-table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Tamu</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      @foreach($data as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->date }}</td>
        <td>{{ $item->time }}</td>
        <td>{{ $item->guests }}</td>
        <td class="table-actions">
          <a href="{{ route('admin.reservasi.edit', $item->id) }}" class="btn-edit">Edit</a>

          <form action="{{ route('admin.reservasi.destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
