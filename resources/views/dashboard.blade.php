<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
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
            background: linear-gradient(180deg, #ffe8ed 0%, #fff5f5 50%, #ffe8ed 100%);
            color: #3b1a1a;
        }

        /* ── NAVBAR ── */
        .navbar {
            display: grid;
            grid-template-columns: 1fr auto 1fr; /* ← INI KUNCINYA */
            align-items: center;
            padding: 0 50px;
            height: 75px;
            border-bottom: 1px solid #f5e0e0;
            background: white;
            background-image: url("{{ asset('images/frame 310(2).png') }}");
            background-size: cover;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-left { 
            display: flex;
            justify-content: flex-start;
            align-items: center; 
        }

        /* TENGAH - posisi absolut kayak welcome */
        .nav-center {
            position: flex;
            justify-content: center; /* ← otomatis tengah */
            align-items: center;
        }

        .nav-links {
            font-size: 13px;
            display: flex;
            gap: 28px;          /* ← sama kayak welcome */
            list-style: none;
        }

        .nav-links a {    /* ← sama kayak welcome */
            font-weight: 500;
            color: #7a4a4a;
            text-decoration: none;
            transition: color 0.2s;
            padding: 4px 0;
            border-bottom: 1.5px solid transparent; /* ← pastiin ini ada */
            opacity: 0.7; /* ← mulai dari semi transparan */
            transition: all 0.2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #e07080;
            border-bottom-color: #FFBBC0; 
            opacity: 1;/* ← sama kayak welcome */
        }

        .nav-right {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* ← nempel kanan */
            gap: 18px;
        }
        .search-box {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.8);
            border: 1px solid #f5e0e0;
            border-radius: 100px;
            padding: 8px 16px;
            width: 180px;
        }
        .search-box {
            display: flex;
            align-items: center; /* ← ini yang bikin sejajar */
            gap: 8px;
        }

        .search-box iconify-icon {
            display: flex; /* ← iconify kadang butuh ini biar sejajar */
            align-items: center;
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
            display: flex;        /* ← tambahin */
            align-items: center;  /* ← tambahin */
            justify-content: center;
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
            background: linear-gradient(135deg, #ffe8ed 0%, #f5a5b6 50%, #ffdde4 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
        }

        /* ── BANNER SLIDER ── */
        .banner-section {
            position: relative;
            padding: 24px 40px 0 40px;
        }
        .banner-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 260px; /* ← WAJIB ADA ini! */
        }

        .banner-slide {
            display: none;
            width: 100%;          /* ← tambahin */
            height: 100%;         /* ← tambahin */
            position: absolute;   /* ← tambahin */
            top: 0; left: 0;      /* ← tambahin */
            background-size: cover;      /* ← tambahin */
            background-position: center; /* ← tambahin */
            padding: 40px;
            align-items: center;  /* ← tambahin */
            justify-content: center; /* ← tambahin */
            flex-direction: column;  /* ← tambahin */
        }
        .banner-slide.active {
            display: flex;
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
            position: absolute; top: 50%; transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            z-index: 10;
            transition: all 0.2s;
            padding: 0;
        }
        .banner-arrow:hover { transform: translateY(-50%) scale(1.1); }
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
/* ── INFO BAR ── */
        .info-bar {
            display: flex;
            gap: 20px;
            padding: 20px 48px;
            align-items: stretch;
        }

        .koin-card {
            background: linear-gradient(135deg, #ffe8ed 0%, #f5a5b6 50%, #ffdde4 100%);
            width : 250px;
            border: 1px solid #F0D5D8;
            border-radius: 16px;
            padding: 20px 28px;
            text-align: center;
            box-shadow: 0 2px 12px rgba(184,92,101,0.08);
            min-width: 160px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 4px;
            border: 0.5px solid #b85c65;
        }

        .koin-top {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 2px;
            margin-right: 10px;
        }

        .koin-top span:first-child {
            font-size: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1.5px solid #F0D5D8; /* ← border */
            box-shadow: 0 2px 8px rgba(184,92,101,0.2); /* ← shadow */
            background: rgba(255,255,255,0.3);
        }

        .koin-top span:first-child {
            display: inline-flex;
            filter: drop-shadow(0 2px 6px rgba(184,92,101,0.3));
        }

        .koin-angka {
            font-size: 45px;
            font-weight: 800;
            color: #5D393B;
        }

        .koin-label {
            font-size: 11px;
            color: #5D393B;
            margin-bottom: 10px;
            margin-top: -10px;
        }

        .koin-link {
            font-size: 12px;
            font-weight: 600;
            color: #b85c65;
            text-decoration: none;
            border-top: 1px solid #F0D5D8;
            padding-top: 10px;
            display: block;
        }
        .koin-link:hover { color: #9e4a52; }

        /* SHORTCUT */
        .shortcut-grid {
            display: flex;
            gap: 16px;
            flex: 1;
        }

        .shortcut-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 8px;
        }

        .shortcut-item {
            flex: 1;
            background: white;
            border: 1px solid #F0D5D8;
            border-radius: 16px;
            padding: 18px 20px;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            gap: 4px;
            transition: all 0.2s;
            box-shadow: 0 2px 12px rgba(184,92,101,0.06);
        }

        .shortcut-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(184,92,101,0.12);
            border-color: #FFBBC0;
        }

        .shortcut-icon { font-size: 22px; margin-bottom: 4px; opacity: 0.8;}
       
        .shortcut-num {
            font-size: 40px;
            font-weight: 800;
            color: #5D393B;
            line-height: 1;
            flex-direction: raw;
            margin-left: 20px;
            flex: 2;
            display: flex;
            align-items: center;
            gap: 240px;
        }

        .shortcut-label {
            font-size: 12px;
            font-weight: 600;
            color: #5D393B;
            margin-left: 20px;
        }

        .shortcut-sub {
            font-size: 10px;
            color: #9E7178;
            margin-left: 20px;
        }
        /* ── PRODUK TERBARU ── */
        .product-section {
            padding: 28px 48px 40px 48px;
        }
        .product-grid { 
            display: grid; 
            grid-template-columns: repeat(5, 1fr); 
            gap: 16px;
            max-width: 12000px; /* ← tambahin max-width biar ga terlalu lebar */

        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 20px;
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


        .product-card {
            flex: 0 0 220px;
            min-width: 220px;
            border-radius: 16px;
            overflow: hidden;
            border: 1.5px solid #f5e0e0;
            transition: box-shadow 0.2s;
            background: white;
            padding: 12px;
        }

        .product-card:hover {
            box-shadow: 0 4px 20px rgba(224,112,128,0.12);
        }

        .prod-header {
            display: flex; justify-content: space-between; align-items: baseline;
            margin-bottom: 24px;
        }
        .prod-title { font-size: 20px; font-weight: 700; color: #5D393B; }
        .view-all-link {
            font-size: 13px; font-weight: 500; color: #9E7178;
            border-bottom: 1px solid #F0D5D8; padding-bottom: 2px;
            cursor: pointer; transition: all 0.2s; text-decoration: none;
        }
        .view-all-link:hover { color: #5D393B; border-color: #5D393B; }

        .product-card { cursor: pointer; }
        .product-img-wrap img {
            width: 100%; 
            height: 100%;
            object-fit: cover; /* ← ganti dari cover ke contain */
            position: absolute; 
            inset: 0;
        }
        .product-img-wrap {
            position: relative; overflow: hidden; border-radius: 12px;
            background: transparent; 
            aspect-ratio: 2/3; /* ← ini yang ngatur tinggi card, kecilkan jadi 4/5 biar lebih pendek */
            margin-bottom: 14px;
            display: flex; align-items: center; justify-content: center;
            border: 1px solid #F0D5D8;
            transition: transform 0.3s;
        }
        .product-card:hover .product-img-wrap { transform: scale(1.02); }

        .badge-v {
            position: absolute; top: 10px; left: 10px;
            background: #FFBBC0; color: #5D393B;
            font-size: 9px; font-weight: 700; padding: 3px 10px;
            border-radius: 100px; letter-spacing: 0.3px;
        }
        .wishlist-btn {
            position: absolute; top: 10px; right: 10px;
            background: rgba(255,255,255,0.85); border-radius: 50%;
            width: 32px; height: 32px; display: flex; align-items: center;
            justify-content: center; font-size: 14px; cursor: pointer;
            transition: all 0.2s; backdrop-filter: blur(4px);
        }
        .wishlist-btn:hover { background: white; transform: scale(1.1); }
        .btn-cart-hover {
            position: absolute; bottom: -44px; left: 0; right: 0;
            background: #5D393B; color: white; border: none;
            padding: 12px; font-family: 'Poppins', sans-serif;
            font-size: 12px; font-weight: 600; cursor: pointer;
            transition: bottom 0.3s; letter-spacing: 0.5px;
            border-radius: 0 0 12px 12px;
        }
        .product-card:hover .btn-cart-hover { bottom: 0; }

        .p-brand { 
            font-size: 10px; 
            color: #9E7178; 
            margin-bottom: 3px; 
        }
        .p-name { 
            font-size: 10px;
            font-weight: 600; 
            color: #5D393B; 
            margin-bottom: 4px; 
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* ← max 2 baris */
            -webkit-box-orient: vertical;
            overflow: hidden;
            word-break: break-word; /* ← tambahin ini biar ga dempet */
        }
        .p-price { 
            font-size: 13px; 
            font-weight: 700; 
            color: #5D393B;
            display: flex; /* ← tambahin */
            flex-wrap: wrap; /* ← tambahin biar harga ga dempet */
            align-items: center;
            gap: 4px; /* ← jarak antar harga */
        }

        .p-original { 
            font-size: 11px; 
            color: #9E7178; 
            text-decoration: line-through;
            margin-left: 0; /* ← hapus margin, ganti pake gap di parent */
        }

        .p-discount { 
            font-size: 10px; 
            font-weight: 600; 
            color: #4CAF7D;
            margin-left: 0;
        }
        .btn-keranjang:hover {
            background: #fce4ec;
            border-color: #f4a0aa;
        }

            * ── DAUR ULANG ── */
        .daur-section {
            margin: 28px 48px 40px 48px;
        }

        .daur-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
        }

        .daur-title {
            font-size: 20px;
            font-weight: 700;
            color: #5D393B;
            margin-left: 47.7px;
        }

        .daur-link {
            font-size: 12px;
            color: #b85c65;
            font-weight: 500;
            text-decoration: none;
            margin-right: 47.7px;
        }

        .daur-box {
            background: white;
            border-radius: 18px;
            margin-left: 47.7px;
            margin-bottom: 90px;
            border: 1px solid #F0D5D8;
            overflow: hidden;
            width: 93.7%;
            display: grid;
            grid-template-columns: 1fr 2fr;
            box-shadow: 0 2px 12px rgba(184,92,101,0.06);
        }

        .daur-left {
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 50%, #e8f5e9 100%);
            padding: 28px 24px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .daur-left h3 {
            font-size: 17px;
            font-weight: 700;
            color: #2D5016;
            margin-bottom: 8px;
            margin-left: 20px;
            line-height: 1.6;
        }

        .daur-left p {
            font-size: 12px;
            color: #4a7c2f;
            line-height: 1.7;
            margin-bottom: 18px;
            margin-left: 20px;
        }

        .daur-emoji {
            font-size: 28px;
            margin-bottom: 12px;
            margin-left: 20px;
        }

        .btn-daur {
            background: #4CAF7D;
            color: white;
            border: none;
            padding: 10px 110px;
            border-radius: 100px;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 600;
            margin-left: 20px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            width: fit-content;
        }

        .daur-right {
            padding: 20px 24px;
        }

        .daur-right-title {
            font-size: 12px;
            font-weight: 700;
            color: #5D393B;
            margin-bottom: 14px;
        }

        .daur-empty {
            text-align: center;
            padding: 32px 0;
            color: #9E7178;
        }

        .daur-empty-icon {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .daur-empty-text {
            font-size: 13px;
            font-weight: 500;
        }

        .daur-empty-sub {
            font-size: 11px;
            margin-top: 4px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <img src="{{ asset('images/AYU-NE.png') }}" alt="AYU-NE" style="height: 36px; width: auto; object-fit: contain;">

    <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="{{ route('ayu-belanja') }}">Ayu Belanja</a></li>
        <li><a href="{{ route('ayu-daur-ulang') }}">Ayu Daur Ulang</a></li>
        <li><a href="{{ route('ayu-koin') }}">Ayu Koin</a></li>
    </ul>

    <div class="nav-right">
    <div class="search-box">
        <span><iconify-icon icon="basil:search-solid" width="20" id="icon-cart"></iconify-icon></span>
        <input type="text" placeholder="Cari produk...">
    </div>

        <div class="nav-icon">
       <iconify-icon icon="basil:notification-outline" width="25"></iconify-icon>
        <div class="badge">•</div>
        </div>

        <div class="nav-icon">
        <iconify-icon icon="mynaui:cart" width="25"></iconify-icon>
            <div class="badge">2</div>
        </div>

        <div class="avatar">
        <iconify-icon icon="icon-park-solid:women" width="20"></iconify-icon>
        </div>
    </div>
    </div>
</nav>

<!-- BANNER -->
<div class="banner-section" style="position: relative;">
    <div class="banner-wrapper">
    
        <button class="banner-arrow left" onclick="prevBanner()">
        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="26" cy="10" rx="7" ry="10" fill="white" opacity="0.5"/>
        <ellipse cx="26" cy="42" rx="7" ry="10" fill="white" opacity="0.5"/>
        <ellipse cx="10" cy="26" rx="10" ry="7" fill="white" opacity="0.5"/>
        <ellipse cx="42" cy="26" rx="10" ry="7" fill="white" opacity="0.5"/>
        <ellipse cx="15" cy="15" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(-45 15 15)"/>
        <ellipse cx="37" cy="15" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(45 37 15)"/>
        <ellipse cx="15" cy="37" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(45 15 37)"/>
        <ellipse cx="37" cy="37" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(-45 37 37)"/>
        <circle cx="26" cy="26" r="7" fill="white" opacity="0.5"/>
        <!-- panah -->
        <path d="M28 20 L20 26 L28 32" stroke="#b85c65" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
    </svg>
    </button>

        <div class="banner-slide active"
            style ="background-image: url('{{ asset('images/banner3.png') }}'); background-size: cover; background-position: center;">
            &nbsp;
        </div>
        <div class="banner-slide"
            style ="background-image: url('{{ asset('images/banner2.png') }}'); background-size: cover; background-position: center;">
            &nbsp;
        </div>
        <div class="banner-slide"
            style ="background-image: url('{{ asset('images/banner4.png') }}'); background-size: cover; background-position: center;">
            &nbsp;
        </div>

        <button class="banner-arrow right" onclick="nextBanner()">
        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="26" cy="10" rx="7" ry="10" fill="white" opacity="0.5"/>
            <ellipse cx="26" cy="42" rx="7" ry="10" fill="white" opacity="0.5"/>
            <ellipse cx="10" cy="26" rx="10" ry="7" fill="white" opacity="0.5"/>
            <ellipse cx="42" cy="26" rx="10" ry="7" fill="white" opacity="0.5"/>
            <ellipse cx="15" cy="15" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(-45 15 15)"/>
            <ellipse cx="37" cy="15" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(45 37 15)"/>
            <ellipse cx="15" cy="37" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(45 15 37)"/>
            <ellipse cx="37" cy="37" rx="7" ry="10" fill="white" opacity="0.5" transform="rotate(-45 37 37)"/>
            <circle cx="26" cy="26" r="7" fill="white" opacity="0.5"/>
            <!-- panah -->
            <path d="M24 20 L32 26 L24 32" stroke="#b85c65" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        </svg>
        </button>

        <div class="banner-dots">
            <div class="banner-dot active" onclick="goBanner(0)"></div>
            <div class="banner-dot" onclick="goBanner(1)"></div>
            <div class="banner-dot" onclick="goBanner(2)"></div>
        </div>
    </div>
</div>


<!-- INFO BAR: Ayu Koin + Shortcut -->
<div class="info-bar">
        <!-- KOIN CARD -->
    <div class="koin-card">
        <div class="koin-top">
            <span>🪙</span>
            <span class="koin-angka">150</span>
        </div>
        <div class="koin-label">Ayu Koin</div>
        <a href="#" class="koin-link">Tukar Koin →</a>
    </div>

 <!-- SHORTCUT MENU -->
<div class="shortcut-grid">
    <a href="#" class="shortcut-item">
        <div class="shortcut-num">7
            <iconify-icon icon="fluent:shopping-bag-48-filled" width="50" style="opacity:0.5;"></iconify-icon></div>
        <div class="shortcut-label">Produk Dijual</div>
        <div class="shortcut-sub">2 bulan ini</div>
        <div class="shortcut-bottom">
        </div>
    </a>
    <a href="#" class="shortcut-item">
        <div class="shortcut-num">4
            <iconify-icon icon="streamline-block:shopping-bag" width="45" style="opacity:0.5;"></iconify-icon></div>
        <div class="shortcut-label">Produk Terjual</div>
        <div class="shortcut-sub">1 minggu ini</div>
        <div class="shortcut-bottom">
        </div>
    </a>
    <a href="#" class="shortcut-item">
        <div class="shortcut-num">5
            <iconify-icon icon="fontisto:recycle" width="50" style="opacity:0.5;"></iconify-icon></div>
        <div class="shortcut-label">Daur Ulang</div>
        <div class="shortcut-sub">2 bulan ini</div>
        <div class="shortcut-bottom">
        </div>
    </a>
    </div>
</div>

<!-- PRODUK TERBARU -->
<div class="product-section">
    <div class="prod-header">
        <div class="prod-title">Produk Terbaru 🌸</div>
        <a href="#" class="view-all-link">Lihat Semua →</a>
    </div>

    <div class="product-grid">

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=715&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Wardah</div>
            <div class="p-name">Wardah Instaperfect Matte Lipstick</div>
            <div class="p-price">Rp 35.000<span class="p-original">Rp 75.000</span><span class="p-discount">-53%</span></div>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1688614585803-0c00bde3828d?q=80&w=1171&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Emina</div>
            <div class="p-name">Emina Bright Stuff Face Wash</div>
            <div class="p-price">Rp 15.000<span class="p-original">Rp 32.000</span><span class="p-discount">-53%</span></div>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://plus.unsplash.com/premium_photo-1670514094627-9ed5a1e9c06f?q=80&w=686&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Somethinc</div>
            <div class="p-name">Somethinc Niacinamide Serum</div>
            <div class="p-price">Rp 75.000<span class="p-original">Rp 150.000</span><span class="p-discount">-50%</span></div>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://plus.unsplash.com/premium_photo-1677175230595-87f8721ff703?q=80&w=784&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Maybelline</div>
            <div class="p-name">Fit Me Matte + Poreless Foundation</div>
            <div class="p-price">Rp 65.000<span class="p-original">Rp 130.000</span><span class="p-discount">-50%</span></div>
        </div>
        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=715&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Wardah</div>
            <div class="p-name">Wardah Instaperfect Matte Lipstick</div>
            <div class="p-price">Rp 35.000<span class="p-original">Rp 75.000</span><span class="p-discount">-53%</span></div>
        </div>
        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=715&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Wardah</div>
            <div class="p-name">Wardah Instaperfect Matte Lipstick</div>
            <div class="p-price">Rp 35.000<span class="p-original">Rp 75.000</span><span class="p-discount">-53%</span></div>
        </div>
        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=715&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Wardah</div>
            <div class="p-name">Wardah Instaperfect Matte Lipstick</div>
            <div class="p-price">Rp 35.000<span class="p-original">Rp 75.000</span><span class="p-discount">-53%</span></div>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://images.unsplash.com/photo-1688614585803-0c00bde3828d?q=80&w=1171&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Emina</div>
            <div class="p-name">Emina Bright Stuff Face Wash</div>
            <div class="p-price">Rp 15.000<span class="p-original">Rp 32.000</span><span class="p-discount">-53%</span></div>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://plus.unsplash.com/premium_photo-1670514094627-9ed5a1e9c06f?q=80&w=686&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Somethinc</div>
            <div class="p-name">Somethinc Niacinamide Serum</div>
            <div class="p-price">Rp 75.000<span class="p-original">Rp 150.000</span><span class="p-discount">-50%</span></div>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://plus.unsplash.com/premium_photo-1677175230595-87f8721ff703?q=80&w=784&auto=format&fit=crop"/>
                <span class="badge-v">✓ Verified</span>
                <div class="wishlist-btn">🤍</div>
                <button class="btn-cart-hover">+ KERANJANG</button>
            </div>
            <div class="p-brand">Maybelline</div>
            <div class="p-name">Fit Me Matte + Poreless Foundation</div>
            <div class="p-price">Rp 65.000<span class="p-original">Rp 130.000</span><span class="p-discount">-50%</span></div>
        </div>

    </div>
    
</div>

<!-- AKTIVITAS DAUR ULANG -->
<div class="daur-section">
    <div class="daur-header">
        <div class="daur-title">Aktivitas Daur Ulang ♻️</div>
        <a href="#" class="daur-link">Lihat Semua →</a>
    </div>
    <div class="daur-box">
        <!-- KIRI: Banner ajakan -->
        <div class="daur-left">
            <div class="daur-emoji">🌿</div>
            <h3>Daur ulang <em>sekarang,</em><br>bumi berterima kasih!</h3>
            <p>
                Kumpulkan kemasan kosmetik kosong,<br>
                drop ke lokasi terdekat, scan QR,<br>
                dan dapat Ayu Koin!
            </p>
            <a href="#" class="btn-daur">🌿 Mulai Daur Ulang</a>
        </div>
        <!-- KANAN: Riwayat (empty state) -->
        <div class="daur-right">
            <div class="daur-right-title">Riwayat Terbaru</div>
            <div class="daur-empty">
                <div class="daur-empty-icon">♻️</div>
                <div class="daur-empty-text">Belum ada aktivitas daur ulang</div>
                <div class="daur-empty-sub">Yuk mulai daur ulang sekarang!</div>
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