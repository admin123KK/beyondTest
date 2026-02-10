<x-app-layout>
    <style>
        .hero {
            position: relative;
            height: 100vh;
            min-height: 900px;
            background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.75)),
                url('{{ asset('images/home-pokhara-abc.jpg') }}') center/cover no-repeat fixed;
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
            padding: 2rem 5%;
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

        .cta {
            display: inline-block;
            background: white;
            color: #0f766e;
            font-weight: 700;
            font-size: 1.4rem;
            padding: 1.3rem 4rem;
            border-radius: 9999px;
            text-decoration: none;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
            transition: all 0.4s ease;
        }

        .cta:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
        }

        .scroll-hint {
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.3rem;
            opacity: 0.85;
            animation: bounce 2.5s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translate(-50%, 0);
            }

            40% {
                transform: translate(-50%, -20px);
            }

            60% {
                transform: translate(-50%, -10px);
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 4rem;
            }

            .hero-subtitle {
                font-size: 1.5rem;
            }

            .nav-links {
                display: none;
            }

            .cta {
                padding: 1rem 2.5rem;
                font-size: 1.2rem;
            }
        }
    </style>

    <div class="hero">
        <!-- Navigation -->
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
            <h1 class="hero-title">Explore the Himalayas</h1>
            <p class="hero-subtitle">
                A place where nature and adventure unite — from Pokhara to Annapurna Base Camp & Manang
            </p>

            <a href="{{ route('trek.booking') }}" class="cta">
                Book Now
            </a>
        </div>

        <!-- Scroll hint -->
        <div class="scroll-hint">
            Scroll down ↓
        </div>
    </div>
</x-app-layout>