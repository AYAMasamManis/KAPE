{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiteu</title>
    <style>
        body { background-color: #fceaea; font-family: sans-serif; }
        header, footer { background-color: #caa6a6; color: white; padding: 1rem; text-align: center; }
        nav a { color: white; margin: 0 10px; text-decoration: none; }
        .cta-button { background: #a85c5c; color: white; padding: 8px 16px; border: none; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>

    <header>
        <h1>Waiteu Collagen</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/produk">Produk</a>
            <a href="/dashboard">Dashboard</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Waiteu. All rights reserved.
    </footer>

</body>
</html>
