<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Kemasan - AYU-NE</title>
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
            text-decoration: none;
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
            text-decoration: none;
        }

        /* CONTENT */
        .content {
            max-width: 700px;
            margin: 0 auto;
            padding: 48px 20px;
            text-align: center;
        }

        h1 {
            font-size: 26px;
            font-weight: 800;
            color: #3b1a1a;
            margin-bottom: 28px;
        }

        /* TAB BUTTONS */
        .tab-wrap {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 36px;
        }

        .tab-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 28px;
            border-radius: 50px;
            border: 1.5px solid #f0d5d5;
            background: white;
            font-size: 14px;
            font-weight: 500;
            color: #7a4a4a;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: all 0.2s;
        }

        .tab-btn.active {
            background: #f4a0aa;
            color: white;
            border-color: #f4a0aa;
            font-weight: 600;
        }

        .tab-btn:hover:not(.active) {
            border-color: #f4a0aa;
            color: #e07080;
        }

        /* SCAN VIEW */
        .scan-view { display: none; }
        .scan-view.active { display: block; }

        .scan-box-wrap {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 0 auto 20px auto;
        }

        .scan-box {
            width: 100%;
            height: 100%;
            background: #f9f5f5;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }

        /* scan line animasi */
        .scan-line {
            position: absolute;
            left: 0;
            right: 0;
            height: 2px;
            background: #f4a0aa;
            animation: scanMove 2s ease-in-out infinite;
        }

        @keyframes scanMove {
            0%   { top: 10%; }
            50%  { top: 85%; }
            100% { top: 10%; }
        }

        /* Corner borders */
        .corner {
            position: absolute;
            width: 28px;
            height: 28px;
        }

        .corner-tl {
            top: -2px; left: -2px;
            border-top: 3px solid #f4a0aa;
            border-left: 3px solid #f4a0aa;
            border-radius: 4px 0 0 0;
        }

        .corner-tr {
            top: -2px; right: -2px;
            border-top: 3px solid #f4a0aa;
            border-right: 3px solid #f4a0aa;
            border-radius: 0 4px 0 0;
        }

        .corner-bl {
            bottom: -2px; left: -2px;
            border-bottom: 3px solid #f4a0aa;
            border-left: 3px solid #f4a0aa;
            border-radius: 0 0 0 4px;
        }

        .corner-br {
            bottom: -2px; right: -2px;
            border-bottom: 3px solid #f4a0aa;
            border-right: 3px solid #f4a0aa;
            border-radius: 0 0 4px 0;
        }

        .scan-hint {
            font-size: 13.5px;
            color: #7a4a4a;
            margin-bottom: 24px;
        }

        .btn-aktifkan {
            padding: 14px 48px;
            background: #f4a0aa;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: background 0.2s;
            margin-bottom: 16px;
            display: block;
            margin: 0 auto 16px auto;
        }

        .btn-aktifkan:hover { background: #e8858f; }

        .link-manual {
            font-size: 13px;
            color: #e07080;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 16px;
        }

        .link-manual:hover { opacity: 0.7; }

        /* MANUAL VIEW */
        .manual-view { display: none; }
        .manual-view.active { display: block; }

        .manual-label {
            font-size: 16px;
            font-weight: 700;
            color: #3b1a1a;
            margin-bottom: 12px;
        }

        .manual-input {
            width: 100%;
            padding: 16px 20px;
            border: 1.5px solid #f0d5d5;
            border-radius: 12px;
            font-size: 15px;
            color: #3b1a1a;
            outline: none;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            letter-spacing: 1px;
            transition: border 0.2s;
            margin-bottom: 8px;
        }

        .manual-input::placeholder {
            color: #d4a0a0;
            letter-spacing: 0;
        }

        .manual-input:focus { border-color: #e8a0a8; }

        .manual-hint {
            font-size: 12.5px;
            color: #b4a0a0;
            margin-bottom: 28px;
        }

        .btn-verifikasi {
            width: 100%;
            padding: 16px;
            background: #f4a0aa;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: background 0.2s;
        }

        .btn-verifikasi:hover { background: #e8858f; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/logo.png') }}" alt="AYU-NE">
        </a>
    </div>
    <ul class="nav-links">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('ayu-belanja') }}">Ayu Belanja</a></li>
        <li><a href="{{ route('ayu-daur-ulang') }}">Ayu Daur Ulang</a></li>
        <li><a href="#">Ayu Koin</a></li>
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

<!-- CONTENT -->
<div class="content">
    <h1>Scan & Input Kemasan</h1>

    <!-- TABS -->
    <div class="tab-wrap">
        <button class="tab-btn active" id="tabScan" onclick="switchTab('scan')">📷 Scan QR Barcode</button>
        <button class="tab-btn" id="tabManual" onclick="switchTab('manual')">✏️ Input Kode Manual</button>
    </div>

    <!-- SCAN VIEW -->
    <div class="scan-view active" id="scanView">
        <div class="scan-box-wrap">
            <div class="scan-box">
                <div class="scan-line"></div>
            </div>
            <div class="corner corner-tl"></div>
            <div class="corner corner-tr"></div>
            <div class="corner corner-bl"></div>
            <div class="corner corner-br"></div>
        </div>

        <p class="scan-hint" style="margin-top: 20px; margin-bottom: 24px;">
            Arahkan kamera ke QR/barcode kemasan kosmetikmu
        </p>

        <button class="btn-aktifkan">Aktifkan Kamera</button>

        <a class="link-manual" onclick="switchTab('manual')">
            Tidak bisa scan? Input kode manual →
        </a>
    </div>

    <!-- MANUAL VIEW -->
    <div class="manual-view" id="manualView">
        <p class="manual-label">Masukkan Kode Unik Kemasan</p>
        <input
            type="text"
            class="manual-input"
            placeholder="Contoh: AYU-2026-XXXXX"
            maxlength="20"
            oninput="this.value = this.value.toUpperCase()"
        >
        <p class="manual-hint">Kode unik ada di bagian bawah kemasan produkmu</p>
        <button class="btn-verifikasi">Verifikasi Kode</button>
    </div>
</div>

<script>
    function switchTab(tab) {
        const scanView   = document.getElementById('scanView');
        const manualView = document.getElementById('manualView');
        const tabScan    = document.getElementById('tabScan');
        const tabManual  = document.getElementById('tabManual');

        if (tab === 'scan') {
            scanView.classList.add('active');
            manualView.classList.remove('active');
            tabScan.classList.add('active');
            tabManual.classList.remove('active');
        } else {
            manualView.classList.add('active');
            scanView.classList.remove('active');
            tabManual.classList.add('active');
            tabScan.classList.remove('active');
        }
    }
</script>

</body>
</html>