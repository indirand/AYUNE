<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayu Daur Ulang - AYU-NE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #fff;
            color: #3b1a1a;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 40px;
            border-bottom: 1px solid #f5e0e0;
            background: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-logo img {
            height: 36px;
            width: auto;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 36px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #7a4a4a;
            transition: color 0.2s;
        }

        .nav-links a:hover { color: #e07080; }

        .nav-links a.active {
            color: #e07080;
            font-weight: 700;
            border-bottom: 2px solid #e07080;
            padding-bottom: 2px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: #f9f0f2;
            border-radius: 50px;
            padding: 8px 16px;
            gap: 8px;
            width: 220px;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 13px;
            color: #3b1a1a;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .search-box input::placeholder { color: #c4a0a0; }

        .nav-icon {
            position: relative;
            cursor: pointer;
            font-size: 20px;
            color: #7a4a4a;
        }

        .badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background: #e07080;
            color: white;
            font-size: 9px;
            font-weight: 700;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #f4a0aa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 700;
            color: white;
            cursor: pointer;
            text-decoration: none;
        }

        /* HERO SECTION */
        .hero {
            display: flex;
            align-items: center;
            min-height: 520px;
            background: linear-gradient(135deg, #fff5f7 0%, #fce4ec 100%);
            padding: 60px 60px;
            gap: 60px;
        }

        .hero-img-box {
            flex: 1;
            background: white;
            border-radius: 20px;
            height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #c4a0a0;
            box-shadow: 0 4px 20px rgba(224,112,128,0.08);
            flex-shrink: 0;
            max-width: 480px;
        }

        .hero-right {
            flex: 1;
        }

        .hero-tag {
            font-size: 14px;
            color: #e07080;
            font-weight: 500;
            margin-bottom: 16px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 800;
            color: #3b1a1a;
            line-height: 1.15;
            margin-bottom: 20px;
        }

        .hero-desc {
            font-size: 15px;
            color: #7a4a4a;
            line-height: 1.7;
            margin-bottom: 32px;
            max-width: 440px;
        }

        .btn-primary {
            background: #f4a0aa;
            color: white;
            border: none;
            padding: 16px 36px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover { background: #e8858f; }

        /* STEP SECTION */
        .step-section {
            padding: 60px 60px;
            background: white;
        }

        .step-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .step-card {
            background: white;
            border: 1.5px solid #f5e0e0;
            border-radius: 20px;
            padding: 36px 28px;
        }

        .step-number {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #f4a0aa;
            color: white;
            font-size: 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .step-icon {
            font-size: 28px;
            margin-bottom: 16px;
        }

        .step-card h3 {
            font-size: 17px;
            font-weight: 700;
            color: #3b1a1a;
            margin-bottom: 10px;
        }

        .step-card p {
            font-size: 13px;
            color: #9a6a6a;
            line-height: 1.7;
        }

        /* KEMASAN SECTION */
        .kemasan-section {
            padding: 0 60px 60px 60px;
        }

        .kemasan-box {
            background: #fdf0f2;
            border-radius: 20px;
            padding: 36px 40px;
        }

        .kemasan-box h2 {
            font-size: 20px;
            font-weight: 700;
            color: #3b1a1a;
            margin-bottom: 24px;
        }

        .kemasan-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
        }

        .kemasan-item {
            background: white;
            border-radius: 12px;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 500;
            color: #3b1a1a;
        }

        .kemasan-check {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #f4a0aa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
            flex-shrink: 0;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/AYU-NE.png') }}" alt="AYU-NE">
        </a>
    </div>
    <ul class="nav-links">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('ayu-belanja') }}">Ayu Belanja</a></li>
        <li><a href="{{ route('ayu-daur-ulang') }}" class="active">Ayu Daur Ulang</a></li>
        <li><a href="{{ route('ayu-koin') }}">Ayu Koin</a></li>
    </ul>
    <div class="nav-right">
        <div class="search-box">
            <span>🔍</span>
            <input type="text" placeholder="Cari produk...">
        </div>
        <a href="{{ route('notifikasi') }}" class="nav-icon">🔔<div class="badge">•</div></a>
        <a href="{{ route('keranjang') }}" class="nav-icon">🛒<div class="badge">2</div></a>
        <a href="{{ route('profil') }}" class="avatar">A</a>
    </div>
</nav>

<!-- HERO -->
<div class="hero">
    <div class="hero-img-box">
        Cosmetic Packaging Recycling Illustration
    </div>
    <div class="hero-right">
        <p class="hero-tag">Eco-Beauty</p>
        <h1 class="hero-title">Daur Ulang Kosmetikmu, Raih Ayu Koin!</h1>
        <p class="hero-desc">Bergabunglah dalam gerakan circular economy. Daur ulang kemasan kosmetikmu dan dapatkan reward untuk setiap kontribusimu.</p>
        <a href="{{ route('dropoff-lokasi') }}" class="btn-primary">Daur Ulang Sekarang</a>
    </div>
</div>

<!-- STEP SECTION -->
<div class="step-section">
    <div class="step-grid">

        <div class="step-card">
            <div class="step-number">1</div>
            <div class="step-icon">📍</div>
            <h3>Pilih Lokasi Drop-Off</h3>
            <p>Temukan lokasi drop-off terdekat dari lokasimu melalui peta atau daftar partner</p>
        </div>

        <div class="step-card">
            <div class="step-number">2</div>
            <div class="step-icon">📱</div>
            <h3>Scan QR / Input Kode</h3>
            <p>Scan barcode pada kemasan atau input kode unik untuk verifikasi produk</p>
        </div>

        <div class="step-card">
            <div class="step-number">3</div>
            <div class="step-icon">🪙</div>
            <h3>Dapat Ayu Koin</h3>
            <p>Dapatkan Ayu Koin sebagai reward yang bisa ditukar dengan voucher belanja</p>
        </div>

    </div>
</div>

<!-- KEMASAN SECTION -->
<div class="kemasan-section">
    <div class="kemasan-box">
        <h2>Jenis Kemasan yang Diterima</h2>
        <div class="kemasan-grid">

            <div class="kemasan-item">
                <div class="kemasan-check">✓</div>
                Botol
            </div>
            <div class="kemasan-item">
                <div class="kemasan-check">✓</div>
                Tube
            </div>
            <div class="kemasan-item">
                <div class="kemasan-check">✓</div>
                Pump
            </div>
            <div class="kemasan-item">
                <div class="kemasan-check">✓</div>
                Sachet
            </div>
            <div class="kemasan-item">
                <div class="kemasan-check">✓</div>
                Compact
            </div>
            <div class="kemasan-item">
                <div class="kemasan-check">✓</div>
                Palette
            </div>

        </div>
    </div>
</div>

</body>
</html>