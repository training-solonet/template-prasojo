<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Lurik Prasojo Pedan</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('login.css') }}">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">

        <div class="logo">
            <img src="https://down-id.img.susercontent.com/file/8d4b3cadfed0c9af76df1cb48da33fb2_tn" alt="Logo">
        </div>

        <h1>Lurik Prasojo Pedan</h1>
        <h2>Login</h2>

        <form method="POST" action="{{ route('login.index') }}">
            @csrf

            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <p class="copyright">
            © 2025 Lurik Prasojo Pedan — All Rights Reserved
        </p>

    </div>
</div>

</body>
</html>
