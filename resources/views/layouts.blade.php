<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Ruang Baca FILKOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('buku.index') }}">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pesanan.index') }}">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content-->
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3">
        <div class="container">
            <p class="text-center mb-0">&copy; 2024 My Application. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
