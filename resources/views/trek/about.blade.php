<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Himalayan Harmony Treks</title>

    <!-- Tailwind CSS CDN (for quick development - later use Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        
        .hero {
            position: relative;
            height: 100vh;
            min-height: 800px;
            background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.75)),
                        url('{{ asset('images/lake.jpg') }}') center/cover no-repeat fixed;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .nav {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .logo {
            font-size: 2.3rem;
            font-weight: 800;
            color: white;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
        }

        .nav-links a {
            color: white;
            font-weight: 500;
            margin-left: 2.8rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: #a7f3d0;
        }

        .hero-content {
            max-width: 1000px;
            padding: 0 20px;
            z-index: 2;
        }

        .hero-title {
            font-size: clamp(4rem, 12vw, 7.5rem);
            font-weight: 900;
            line-height: 1;
            margin-bottom: 1.8rem;
            text-shadow: 0 10px 40px rgba(0, 0, 0, 0.8);
        }

        .hero-subtitle {
            font-size: clamp(1.5rem, 5vw, 2.2rem);
            font-weight: 300;
            max-width: 900px;
            margin: 0 auto 3.5rem;
            opacity: 0.95;
            line-height: 1.4;
        }

        .about-section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 6rem 1.5rem;
            background: white;
            color: #1f2937;
        }

        .about-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 2rem;
            text-align: center;
        }

        .about-text {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 1.8rem;
        }

        .highlight {
            color: #0f766e;
            font-weight: 700;
        }

        .cta {
            display: inline-block;
            background: #0f766e;
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
            padding: 1.2rem 3rem;
            border-radius: 9999px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(15,118,110,0.3);
            transition: all 0.3s ease;
        }

        .cta:hover {
            background: #065f46;
            transform: translateY(-4px);
            box-shadow: 0 20px 50px rgba(15,118,110,0.4);
        }

        @media (max-width: 768px) {
            .hero-title { font-size: 4rem; }
            .hero-subtitle { font-size: 1.5rem; }
            .nav-links { display: none; }
            .about-title { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <div class="hero">
        <!-- Custom Navigation (no Breeze bar) -->
        <nav class="nav">
            <a href="{{ route('trek.home') }}" class="logo">Himalayan Harmony</a>

            <div class="nav-links">
                <a href="{{ route('trek.home') }}">Home</a>
                <a href="{{ route('trek.about') }}">About</a>
                <a href="{{ route('trek.itinerary') }}">Itinerary</a>
                <a href="{{ route('trek.gallery') ?? '#' }}">Gallery</a>
                <a href="{{ route('trek.booking') }}">Booking</a>
            </div>

            <div class="md:hidden text-white text-3xl cursor-pointer">☰</div>
        </nav>

        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="hero-title">About Us</h1>
            <p class="hero-subtitle">
                Your trusted companions for unforgettable Himalayan journeys
            </p>
        </div>
    </div>

    <!-- About Content Section -->
    <section class="about-section">
        <h2 class="about-title">Who We Are</h2>

        <p class="about-text">
            <span class="highlight">Himalayan Harmony Treks</span> is a passionate, locally-owned trekking company based in Pokhara, Nepal. We specialize in guiding adventurers from the serene lakeside of Pokhara to the majestic Annapurna Base Camp (ABC) and the high-altitude cultural haven of Manang.
        </p>

        <p class="about-text">
            With more than <span class="highlight">10 years of experience</span> and over <span class="highlight">500 satisfied trekkers</span>, our team consists of licensed, English-speaking guides from Gurung and Tamang communities who know every trail, teahouse, and viewpoint personally.
        </p>

        <p class="about-text">
            We believe in <span class="highlight">responsible tourism</span>: sustainable practices, respect for local culture, fair wages for porters & staff, and your complete safety through proper acclimatization and emergency preparedness.
        </p>

        <p class="about-text">
            Whether you're a solo traveler, couple, family, or group — we customize every trek to match your pace, fitness level, and dreams. From 7-day ABC highlights to extended Manang-Thorong La Pass circuits — your Himalayan story starts with us.
        </p>

        <div class="text-center mt-12">
            <a href="{{ route('trek.booking') }}" class="cta">
                Start Your Journey Today
            </a>
        </div>
    </section>

</body>
</html>