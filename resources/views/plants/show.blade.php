<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $plant->name }} | GreenSpace</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f5f7f0;
            color: #263b2a;
        }

        .navbar, footer {
            background-color: #244b35;
        }

        .detail-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
        }

        .plant-image {
            width: 100%;
            height: 100%;
            min-height: 350px;
            object-fit: cover;
        }

        .price {
            color: #287447;
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('plants.index') }}">
            🌿 GreenSpace
        </a>

        <a href="{{ route('plants.index') }}" class="btn btn-outline-light">
            Kembali ke Katalog
        </a>
    </div>
</nav>

<div class="container py-5">
    <div class="card detail-card shadow-sm">
        <div class="row g-0">
            <div class="col-md-5">
                <img
                    src="{{ asset('assets/images/' . $plant->image) }}"
                    alt="{{ $plant->name }}"
                    class="plant-image"
                >
            </div>

            <div class="col-md-7">
                <div class="card-body p-4 p-lg-5">
                    <p class="text-success fw-semibold">DETAIL TANAMAN</p>

                    <h1 class="fw-bold">{{ $plant->name }}</h1>

                    <p class="text-secondary">
                        Nama ilmiah: {{ $plant->species }}
                    </p>

                    <p class="price">
                        Rp {{ number_format($plant->price, 0, ',', '.') }}
                    </p>

                    <hr>

                    <h5 class="fw-bold">Deskripsi</h5>
                    <p>{{ $plant->description }}</p>

                    <h5 class="fw-bold mt-4">Kebutuhan Cahaya</h5>
                    <p>{{ $plant->sunlight_requirements }}</p>

                    <a href="{{ route('plants.index') }}"
                       class="btn btn-success mt-3">
                        Kembali ke Katalog
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="text-center text-white py-3">
    <p class="mb-0">
        &copy; {{ date('Y') }} GreenSpace — Katalog Tanaman Hias
    </p>
</footer>

</body>
</html>
