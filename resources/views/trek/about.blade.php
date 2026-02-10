<x-app-layout>
    <style>
        .hero {
            position: relative;
            height: 100vh;
            min-height: 800px;
            background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.65)),
                        url('https://tse1.mm.bing.net/th/id/OIP.L1pieOxvhQqX1EMH2GxhgQHaEb?rs=1&pid=ImgDetMain&o=7&rm=3') center/cover no-repeat fixed;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-content {
            max-width: 900px;
            padding: 0 20px;
            z-index: 2;
        }

        .hero-title {
            font-size: clamp(3.5rem, 12vw, 6.5rem);
            font-weight: 800;
            line-height: 1;
            margin-bottom: 1.5rem;
            text-shadow: 0 8px 30px rgba(0,0,0,0.7);
        }

        .hero-subtitle {
            font-size: clamp(1.4rem, 5vw, 2rem);
            font-weight: 300;
            max-width: 800px;
            margin: 0 auto 2.5rem;
            opacity: 0.95;
        }

        .cta {
            display: inline-block;
            background: white;
            color: #0f766e;
            font-weight: 700;
            font-size: 1.3rem;
            padding: 1.2rem 3rem;
            border-radius: 9999px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
            transition: all 0.3s ease;
        }

        .cta:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.45);
        }

        .scroll-hint {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.1rem;
            opacity: 0.8;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translate(-50%, 0); }
            40% { transform: translate(-50%, -15px); }
            60% { transform: translate(-50%, -10px); }
        }

        .nav {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 2rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .logo {
            font-size: 2.2rem;
            font-weight: 700;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-link {
            color: white;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: #a7f3d0;
        }

        .mobile-menu {
            color: white;
            font-size: 1.8rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero-title { font-size: 3.5rem; }
            .hero-subtitle { font-size: 1.4rem; }
        }
    </style>

    <div class="hero">
        <!-- Navigation -->
        <nav class="nav">
            <a href="{{ route('trek.home') }}" class="logo">Himalayan Harmony</a>

            <div class="nav-links">
                <a href="{{ route('trek.home') }}" class="nav-link">Home</a>
                <a href="{{ route('trek.about') }}" class="nav-link">About</a>
                <a href="{{ route('trek.itinerary') }}" class="nav-link">Itinerary</a>
                <a href="{{ route('trek.gallery') ?? '#' }}" class="nav-link">Gallery</a>
                <a href="{{ route('trek.booking') }}" class="nav-link">Booking</a>
                <a href="{{ route('trek.contact') ?? '#' }}" class="nav-link">Contact</a>
            </div>

            <div class="mobile-menu md:hidden">☰</div>
        </nav>

        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="hero-title">Explore the sights of the Himalayas</h1>
            <p class="hero-subtitle">
                A place where nature and adventure unite — from Pokhara to Annapurna Base Camp & Manang
            </p>

            <a href="{{ route('trek.booking') }}" class="cta">
                Book Now
            </a>
        </div>

        <!-- Scroll hint -->
        <div class="scroll-hint text-white">
            Scroll down ↓
        </div>
    </div>
</x-app-layout>