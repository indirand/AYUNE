<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYU-NE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #fce4ec 0%, #fff5f5 50%, #fef9f0 100%);
            overflow-x: hidden;
        }

        /* NAVBAR */
        navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 60px;
            position: relative;
            z-index: 10;
        }

        .logo {
        height: 40px;
        width: auto;
        object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #3b1a1a;
            font-size: 15px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: #e07080;
        }

        .btn-masuk {
            background: #f4a0aa;
            color: white;
            border: none;
            padding: 10px 28px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-masuk:hover {
            background: #e8858f;
        }

        /* HERO SECTION */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 60px 60px 60px;
            min-height: calc(100vh - 80px);
            position: relative;
        }

        .hero-left {
            flex: 1;
            max-width: 520px;
            z-index: 2;
        }

        .hero-title {
            font-size: 52px;
            font-weight: 800;
            color: #3b1a1a;
            line-height: 1.15;
            margin-bottom: 20px;
            transition: opacity 0.5s ease;
        }

        .hero-desc {
            font-size: 16px;
            color: #7a4a4a;
            line-height: 1.7;
            margin-bottom: 36px;
            max-width: 420px;
            transition: opacity 0.5s ease;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            margin-bottom: 40px;
        }

        .btn-primary {
            background: #f4a0aa;
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background: #e8858f;
        }

        .btn-secondary {
            background: transparent;
            color: #3b1a1a;
            border: 2px solid #e0b0b0;
            padding: 14px 30px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            border-color: #e07080;
            color: #e07080;
        }

        /* DOTS */
        .dots {
            display: flex;
            gap: 8px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #f4c0c8;
            cursor: pointer;
            transition: background 0.3s;
        }

        .dot.active {
            background: #e07080;
        }

        /* HERO RIGHT - SLIDER */
        .hero-right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            position: relative;
        }

        .slider-wrapper {
            position: relative;
            width: 560px;
            height: 460px;
        }

        .slide-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            display: none;
            transition: opacity 0.5s ease;
        }

        .slide-img.active {
            display: block;
        }

        /* ARROW BUTTONS */
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 5;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: box-shadow 0.2s;
        }

        .arrow:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }

        .arrow-left {
            left: -500px;
        }

        .arrow-right {
            right: -20px;
        }

        /* DECORATIVE SPARKLES */
        .sparkle {
            position: absolute;
            color: #f4a0aa;
            font-size: 24px;
            pointer-events: none;
        }

        .sparkle-1 { top: 160px; right: 40px; font-size: 30px; }
        .sparkle-2 { bottom: 100px; right: 560px; font-size: 20px; }
        .sparkle-3 { bottom: 180px; left: 420px; font-size: 16px; }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <navbar>
        <img src="{{ asset('images/AYU-NE.png') }}" alt="AYU-NE" class="logo">
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#fitur">Fitur</a></li>
        </ul>
        <a href="{{ route('login') }}" class="btn-masuk">Masuk</a>
    </navbar>

    <!-- HERO -->
    <div class="hero">

        <!-- LEFT: Text -->
        <div class="hero-left">
            <h1 class="hero-title" id="heroTitle">Selamatkan Bumi Melalui Sirkular</h1>
            <p class="hero-desc" id="heroDesc">Daur ulang kemasan kosmetikmu dan dapatkan reward. Bersama AYU-NE, kecantikan berkelanjutan dimulai dari sini.</p>
            <div class="hero-buttons">
                <a href="{{ route('register') }}" class="btn-primary">Mulai Sekarang</a>
                <a href="#" class="btn-secondary">Pelajari Lebih Lanjut</a>
            </div>
            <div class="dots">
                <div class="dot active" onclick="goToSlide(0)"></div>
                <div class="dot" onclick="goToSlide(1)"></div>
                <div class="dot" onclick="goToSlide(2)"></div>
            </div>
        </div>

        <!-- RIGHT: Image Slider -->
        <div class="hero-right">
            <div class="slider-wrapper">
                <button class="arrow arrow-left" onclick="prevSlide()">&#8249;</button>

                <img class="slide-img active"
                    src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=800&q=80"
                    alt="Slide 1">
                <img class="slide-img"
                    src="https://images.unsplash.com/photo-1607006344380-b6775a0824a7?w=800&q=80"
                    alt="Slide 2">
                <img class="slide-img"
                    src="https://images.unsplash.com/photo-1512207736890-6ffed8a84e8d?w=800&q=80"
                    alt="Slide 3">

                <button class="arrow arrow-right" onclick="nextSlide()">&#8250;</button>
            </div>

            <!-- Sparkles dekoratif -->
            <span class="sparkle sparkle-1">✦</span>
            <span class="sparkle sparkle-2">✦</span>
            <span class="sparkle sparkle-3">+</span>
        </div>

    </div>

    <script>
        const slides = [
            {
                title: "Selamatkan Bumi Melalui Sirkular",
                desc: "Daur ulang kemasan kosmetikmu dan dapatkan reward. Bersama AYU-NE, kecantikan berkelanjutan dimulai dari sini."
            },
            {
                title: "Hidupkan Kembali Produk Lamamu.",
                desc: "Tukar kemasan lama dengan Ayu Koin, belanja produk baru dengan harga spesial. Cantik, hemat, dan ramah lingkungan."
            },
            {
                title: "Satu Lipstik Dapat Selamanya di Bumi.",
                desc: "Jangan biarkan kemasan kosmetikmu berakhir di tempat sampah. Mari bersama ciptakan masa depan yang lebih indah."
            }
        ];

        let current = 0;
        let autoplayTimer;

        const titleEl = document.getElementById('heroTitle');
        const descEl = document.getElementById('heroDesc');
        const imgEls = document.querySelectorAll('.slide-img');
        const dotEls = document.querySelectorAll('.dot');

        function goToSlide(index) {
            // Fade out
            titleEl.style.opacity = '0';
            descEl.style.opacity = '0';

            imgEls[current].classList.remove('active');
            dotEls[current].classList.remove('active');

            current = index;

            imgEls[current].classList.add('active');
            dotEls[current].classList.add('active');

            // Update teks
            setTimeout(() => {
                titleEl.textContent = slides[current].title;
                descEl.textContent = slides[current].desc;
                titleEl.style.opacity = '1';
                descEl.style.opacity = '1';
            }, 300);

            resetAutoplay();
        }

        function nextSlide() {
            goToSlide((current + 1) % slides.length);
        }

        function prevSlide() {
            goToSlide((current - 1 + slides.length) % slides.length);
        }

        function resetAutoplay() {
            clearInterval(autoplayTimer);
            autoplayTimer = setInterval(nextSlide, 4000);
        }

        // Mulai autoplay tiap 4 detik
        autoplayTimer = setInterval(nextSlide, 4000);
    </script>

    <!-- SECTION FITUR -->
<section id="fitur" style="
    background: linear-gradient(180deg, #fff0f3 0%, #fce4ec 100%);
    padding: 80px 60px;
    text-align: center;
">
    <h2 style="
        font-size: 28px;
        font-weight: 700;
        color: #3b1a1a;
        margin-bottom: 50px;
        font-family: 'Poppins', sans-serif;
    ">Fitur AYU-NE</h2>

    <div style="
        display: flex;
        justify-content: center;
        gap: 28px;
        flex-wrap: wrap;
        margin-bottom: 50px;
    ">
        <!-- Card 1: Ayu Daur Ulang -->
        <div style="
            background: white;
            border-radius: 16px;
            padding: 40px 30px;
            width: 300px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.05);
            text-align: center;
        ">
            <div style="
                background: #f4a0aa;
                width: 64px;
                height: 64px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 24px auto;
                font-size: 26px;
            ">♻️</div>
            <h3 style="font-size: 18px; font-weight: 700; color: #3b1a1a; margin-bottom: 14px;">Ayu Daur Ulang</h3>
            <p style="font-size: 13.5px; color: #9a6a6a; line-height: 1.7;">
                Kirim kemasan kosmetik bekas dan bantu mengurangi sampah plastik. Setiap kontribusimu berarti untuk bumi!
            </p>
        </div>

        <!-- Card 2: Ayu Belanja -->
        <div style="
            background: white;
            border-radius: 16px;
            padding: 40px 30px;
            width: 300px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.05);
            text-align: center;
        ">
            <div style="
                background: #f4a0aa;
                width: 64px;
                height: 64px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 24px auto;
                font-size: 26px;
            ">🛍️</div>
            <h3 style="font-size: 18px; font-weight: 700; color: #3b1a1a; margin-bottom: 14px;">Ayu Belanja</h3>
            <p style="font-size: 13.5px; color: #9a6a6a; line-height: 1.7;">
                Belanja produk kecantikan favoritmu dengan Ayu Koin. Hemat sambil tetap cantik dan peduli lingkungan!
            </p>
        </div>

        <!-- Card 3: Ayu Koin -->
        <div style="
            background: white;
            border-radius: 16px;
            padding: 40px 30px;
            width: 300px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.05);
            text-align: center;
        ">
            <div style="
                background: #f4a0aa;
                width: 64px;
                height: 64px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 24px auto;
                font-size: 26px;
            ">🪙</div>
            <h3 style="font-size: 18px; font-weight: 700; color: #3b1a1a; margin-bottom: 14px;">Ayu Koin</h3>
            <p style="font-size: 13.5px; color: #9a6a6a; line-height: 1.7;">
                Kumpulkan Ayu Koin dari setiap daur ulang dan tukar dengan produk atau diskon spesial. Makin banyak, makin untung!
            </p>
        </div>
    </div>

    <!-- Tombol Daftar -->
    <a href="{{ route('register') }}" style="
        background: #f4a0aa;
        color: white;
        padding: 16px 48px;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
        transition: background 0.2s;
        display: inline-block;
    "
    onmouseover="this.style.background='#e8858f'"
    onmouseout="this.style.background='#f4a0aa'"
    >Daftar Gratis Sekarang</a>
</section>

</body>
</html>