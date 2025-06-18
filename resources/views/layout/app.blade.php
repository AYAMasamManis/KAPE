<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiteu Collagen</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8e9e9;
            color: #3e2f2f;
        }

        header {
            background-color: #caa6a6;
            padding: 1rem;
            text-align: center;
            color: white;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 2rem 5%;
            min-height: 70vh;
        }

        footer {
            background-color: #caa6a6;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 3rem;
        }

        .cta-button {
            background-color: #a85c5c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cta-button:hover {
            background-color: #914747;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

    <header>
        <h1>Waiteu Collagen Drink</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/produk">Produk</a>
            <a href="/forum">Forum</a>
            <a href="/profil">Profil</a>
            <a href="/about">About</a>
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
