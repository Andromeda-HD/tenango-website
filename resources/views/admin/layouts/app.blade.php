<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="admin-body">

<div class="sidebar">
    <h3 class="brand">Tenango</h3>

    <a href="{{ route('admin.dashboard') }}">Home</a>
    <a href="{{ route('admin.menu.index') }}">Menu</a>
    <a href="{{ route('admin.spot.index') }}">Spot Foto</a>
    <a href="{{ route('admin.reservasi.index') }}">Reservasi</a>
    <form action="{{ route('admin.logout') }}" method="POST" class="logout-form">
    @csrf
    <button type="submit">Logout</button>
    </form>

</div>

<div class="content-area">
    @yield('content')
</div>

</body>
</html>
