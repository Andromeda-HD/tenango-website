<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="login-body">

<div class="login-container">

    <div class="login-left">
        <img src="{{ asset('images/login.jpg') }}" alt="Hero" class="hero-img">
    </div>

    <div class="login-right">
        <div class="login-card">

            <h2>Halo Admin</h2>

            @if(session('error'))
                <div class="error-box">{{ session('error') }}</div>
            @endif

            <form action="{{ url('/admin/login') }}" method="POST">
                @csrf

                <label>Username</label>
                <input type="text" name="username" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <button type="submit">Masuk</button>
            </form>

        </div>
    </div>

</div>

</body>
</html>
