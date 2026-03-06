<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AYU-NE</title>
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

        /* ── NAVBAR ── */
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

        .nav-logo {
            font-size: 22px;
            font-weight: 800;
            color: #3b1a1a;
            letter-spacing: 1px;
        }

        .nav-logo span {
            color: #e07080;
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

        .nav-links a:hover,
        .nav-links a.active {
            color: #e07080;
            font-weight: 600;
        }

        .nav-links a.active {
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
            width: 200px;
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

        .search-box input::placeholder {
            color: #c4a0a0;
        }

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
            background: linear-gradient(135deg, #ffe8ed 0%, #ffc8d4 50%, #ffdde4 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
        }

        /* ── BANNER SLIDER ── */
        .banner-section {
            padding: 24px 40px 0 40px;
        }

        .banner-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: #f4a0aa;
            height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .banner-slide {
            display: none;
            padding: 40px;
        }

        .banner-slide.active {
            display: block;
        }

        .banner-slide h2 {
            font-size: 32px;
            font-weight: 800;
            color: white;
            margin-bottom: 12px;
        }

        .banner-slide p {
            font-size: 15px;
            color: rgba(255,255,255,0.9);
        }

        .banner-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border: none;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 5;
            color: #7a4a4a;
        }

        .banner-arrow.left { left: 16px; }
        .banner-arrow.right { right: 16px; }

        .banner-dots {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .banner-dot {
            width: 24px;
            height: 6px;
            border-radius: 10px;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: background 0.3s;
        }

        .banner-dot.active {
            background: white;
        }

        /* ── FEATURE CARDS ── */
        .feature-section {
            padding: 28px 40px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .feature-card {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px 24px;
            border: 1.5px solid #f5e0e0;
            border-radius: 16px;
            cursor: pointer;
            transition: box-shadow 0.2s, border-color 0.2s;
            text-decoration: none;
            color: inherit;
        }

        .feature-card:hover {
            box-shadow: 0 4px 16px rgba(224,112,128,0.1);
            border-color: #f4a0aa;
        }

        .feature-icon-wrap {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #fce4ec;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .feature-card h3 {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 3px;
        }

        .feature-card p {
            font-size: 12px;
            color: #9a6a6a;
        }

        /* ── PRODUK TERBARU ── */
        .product-section {
            padding: 0 40px 40px 40px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            font-size: 20px;
            font-weight: 700;
        }

        .section-header a {
            font-size: 13px;
            color: #e07080;
            text-decoration: none;
            font-weight: 500;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product-card {
            border-radius: 16px;
            overflow: hidden;
            border: 1.5px solid #f5e0e0;
            transition: box-shadow 0.2s;
            background: white;
        }

        .product-card:hover {
            box-shadow: 0 4px 20px rgba(224,112,128,0.12);
        }

        .product-img {
            background: #fce4ec;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 64px;
        }

        .product-info {
            padding: 14px 16px;
        }

        .product-brand {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 11px;
            color: #9a6a6a;
            margin-bottom: 5px;
        }

        .verified {
            color: #4caf50;
            font-size: 13px;
        }

        .product-name {
            font-size: 13.5px;
            font-weight: 700;
            color: #3b1a1a;
            margin-bottom: 6px;
        }

        .product-price {
            font-size: 14px;
            font-weight: 700;
            color: #e07080;
            margin-bottom: 12px;
        }

        .btn-keranjang {
            width: 100%;
            padding: 10px;
            background: white;
            border: 1.5px solid #f0d5d5;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            color: #3b1a1a;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: all 0.2s;
        }

        .btn-keranjang:hover {
            background: #fce4ec;
            border-color: #f4a0aa;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <img src="{{ asset('images/AYU-NE.png') }}" alt="AYU-NE" style="height: 36px; width: auto; object-fit: contain;">

    <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Ayu Belanja</a></li>
        <li><a href="#">Ayu Daur Ulang</a></li>
        <li><a href="#">Ayu Koin</a></li>
    </ul>

    <div class="nav-right">
        <div class="search-box">
            <span>🔍</span>
            <input type="text" placeholder="Cari produk...">
        </div>

        <div class="nav-icon">
            🔔
            <div class="badge">•</div>
        </div>

        <div class="nav-icon">
            🛒
            <div class="badge">2</div>
        </div>

        <div class="avatar">👤</div>
    </div>
</nav>

<!-- BANNER -->
<div class="banner-section">
    <div class="banner-wrapper">
        <button class="banner-arrow left" onclick="prevBanner()">&#8249;</button>

        <div class="banner-slide active">
            <h2>Belanja Preloved, Selamatkan Bumi</h2>
            <p>Dapatkan diskon hingga 50% untuk produk kecantikan pilihan</p>
        </div>
        <div class="banner-slide">
            <h2>Daur Ulang Kemasan Kosmetikmu</h2>
            <p>Kumpulkan Ayu Koin dan tukar dengan voucher belanja menarik</p>
        </div>
        <div class="banner-slide">
            <h2>Cantik Hemat Ramah Lingkungan</h2>
            <p>Bergabung bersama ribuan Aybies yang peduli bumi</p>
        </div>

        <button class="banner-arrow right" onclick="nextBanner()">&#8250;</button>

        <div class="banner-dots">
            <div class="banner-dot active" onclick="goBanner(0)"></div>
            <div class="banner-dot" onclick="goBanner(1)"></div>
            <div class="banner-dot" onclick="goBanner(2)"></div>
        </div>
    </div>
</div>

<!-- FEATURE CARDS -->
<div class="feature-section">
    <a href="#" class="feature-card">
        <div class="feature-icon-wrap">♻️</div>
        <div>
            <h3>Ayu Daur Ulang</h3>
            <p>Tukar kemasan jadi koin</p>
        </div>
    </a>
    <a href="#" class="feature-card">
        <div class="feature-icon-wrap">🛍️</div>
        <div>
            <h3>Ayu Belanja</h3>
            <p>Produk preloved berkualitas</p>
        </div>
    </a>
    <a href="#" class="feature-card">
        <div class="feature-icon-wrap">🪙</div>
        <div>
            <h3>Ayu Koin</h3>
            <p>Tukar koin jadi voucher</p>
        </div>
    </a>
</div>

<!-- PRODUK TERBARU -->
<div class="product-section">
    <div class="section-header">
        <h2>Produk Terbaru</h2>
        <a href="#">Lihat Semua →</a>
    </div>

    <div class="product-grid">
        <div class="product-card">
            <div class="product-img">💄</div>
            <div class="product-info">
                <div class="product-brand">Wardah <span class="verified">✔</span></div>
                <div class="product-name">Wardah Instaperfect Matte Lipstick</div>
                <div class="product-price">Rp 35.000</div>
                <button class="btn-keranjang">Tambah Keranjang</button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-img">🧴</div>
            <div class="product-info">
                <div class="product-brand">Emina <span class="verified">✔</span></div>
                <div class="product-name">Emina Bright Stuff Face Wash</div>
                <div class="product-price">Rp 15.000</div>
                <button class="btn-keranjang">Tambah Keranjang</button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-img">✨</div>
            <div class="product-info">
                <div class="product-brand">Somethinc <span class="verified">✔</span></div>
                <div class="product-name">Somethinc Niacinamide Serum</div>
                <div class="product-price">Rp 75.000</div>
                <button class="btn-keranjang">Tambah Keranjang</button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-img">💅</div>
            <div class="product-info">
                <div class="product-brand">Maybelline <span class="verified">✔</span></div>
                <div class="product-name">Maybelline Fit Me Foundation</div>
                <div class="product-price">Rp 95.000</div>
                <button class="btn-keranjang">Tambah Keranjang</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Banner slider
    let currentBanner = 0;
    const bannerSlides = document.querySelectorAll('.banner-slide');
    const bannerDots = document.querySelectorAll('.banner-dot');
    let bannerTimer = setInterval(nextBanner, 4000);

    function goBanner(index) {
        bannerSlides[currentBanner].classList.remove('active');
        bannerDots[currentBanner].classList.remove('active');
        currentBanner = index;
        bannerSlides[currentBanner].classList.add('active');
        bannerDots[currentBanner].classList.add('active');
        clearInterval(bannerTimer);
        bannerTimer = setInterval(nextBanner, 4000);
    }

    function nextBanner() {
        goBanner((currentBanner + 1) % bannerSlides.length);
    }

    function prevBanner() {
        goBanner((currentBanner - 1 + bannerSlides.length) % bannerSlides.length);
    }
</script>

</body>
</html>