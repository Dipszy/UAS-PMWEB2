<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parkir.in</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap (Wajib untuk layout dan tombol) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f8f9fa; /* Latar belakang halus */
            }

            .gradient-text {
                background: linear-gradient(90deg, #da9414, #f9fcff);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                display: inline-block;
            }

            .custom-header {
                background-color: #ffffff;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
                z-index: 1050;
                transition: all 0.3s ease;
            }

            .custom-header .nav-link {
                color: #333333;
                font-weight: 500;
                transition: color 0.3s;
            }

            .custom-header .nav-link:hover {
                color: #ff6b00; /* Oranye terang */
            }

            .custom-header .btn-login {
                background-color: #ff6b00;
                color: #ffffff;
                border-radius: 50px;
                padding: 8px 20px;
                font-weight: 500;
                text-decoration: none;
                border: none;
                transition: background-color 0.3s;
            }

            .custom-header .btn-login:hover {
                background-color: #cc5600; /* Oranye gelap saat hover */
                color: #fff;
            }

            @media (max-width: 768px) {
                .custom-header .navbar-nav {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 0.75rem;
                }

                .custom-header .btn-login {
                    margin-top: 10px;
                }
            }
        </style>
    @endif
</head>
<body>
    <!-- HEADER -->
    <header class="custom-header fixed-top py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="gradient-text text-decoration-none fw-bold fs-4">
                Parkir.in
            </a>

            <!-- Navigation -->
            <nav class="d-none d-md-block">
                <ul class="navbar-nav flex-row gap-4 mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#jenis">Jenis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kampus">Kampus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kendaraan">Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#areaparkir">Area Parkir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#transaksi">Transaksi</a>
                    </li>
                </ul>
            </nav>

            <!-- Login Button -->
            <a href="{{ url('/admin') }}" class="btn-login d-none d-md-inline-block">
                Login
            </a>
        </div>
    </header>
</body>
</html>
