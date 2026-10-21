<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Tanaman Hias</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f5f7f0;
            color: #263b2a;
        }

        .navbar {
            background-color: #244b35;
        }

        .hero {
            background-color: #e2eddc;
            padding: 55px 20px;
            border-radius: 18px;
        }

        .plant-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.2s;
        }

        .plant-card:hover {
            transform: translateY(-5px);
        }

        .plant-image {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }

        .price {
            color: #287447;
            font-weight: bold;
        }

        footer {
            background-color: #244b35;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('plants.index') }}">
            🌿 GreenSpace
        </a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link active" href="{{ route('plants.index') }}">
                Katalog
            </a>
            <a class="nav-link" href="#tentang">Tentang</a>
        </div>
    </div>
</nav>

<div class="container my-4">
    <section class="hero text-center mb-5">
        <h1 class="fw-bold">Temukan Tanaman Favoritmu</h1>
        <p class="mb-0">
            Hadirkan suasana segar dan alami di setiap sudut ruangan.
        </p>
    </section>

    <section class="mb-5">
        <h2 class="fw-bold mb-4">Katalog Tanaman Hias</h2>

        <div class="row g-4">
            @forelse ($plants as $plant)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card plant-card shadow-sm h-100">
                        <img
                            src="{{ asset('assets/images/' . $plant->image) }}"
                            class="plant-image"
                            alt="{{ $plant->name }}"
                        >

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">
                                {{ $plant->name }}
                            </h5>

                            <p class="text-secondary mb-2">
                                {{ $plant->species }}
                            </p>

                            <p class="price">
                                Rp {{ number_format($plant->price, 0, ',', '.') }}
                            </p>

                            <a
                                href="{{ route('plants.show', $plant->id) }}"
                                class="btn btn-success mt-auto"
                            >
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>Belum ada data tanaman.</p>
                </div>
            @endforelse
        </div>
    </section>

    <section id="tentang" class="text-center py-4">
        <h3 class="fw-bold">Tentang GreenSpace</h3>
        <p>
            GreenSpace menyediakan informasi berbagai tanaman hias
            untuk mempercantik rumah dan ruanganmu.
        </p>
    </section>
</div>

<footer class="text-center py-3">
    <p class="mb-0">
        &copy; {{ date('Y') }} GreenSpace — Katalog Tanaman Hias
    </p>
</footer>

</body>
</html>
