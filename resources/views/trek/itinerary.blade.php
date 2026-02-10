<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-Day ABC & Manang Itinerary - Himalayan Harmony Treks</title>

    <!-- Tailwind CSS CDN (quick setup - later use Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            position: relative;
            height: 70vh;
            min-height: 500px;
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.85)),
                url('{{ asset('images/sunset.jpg') }}') center/cover no-repeat fixed;
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

        .hero-title {
            font-size: clamp(3rem, 10vw, 5rem);
            font-weight: 800;
            text-shadow: 0 8px 30px rgba(0, 0, 0, 0.9);
        }

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 1.5rem;
        }

        .day-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            transition: all 0.4s ease;
        }

        .day-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
        }

        .day-header {
            background: linear-gradient(90deg, #0f766e, #14b8a6);
            color: white;
            padding: 1.8rem 2rem;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .day-body {
            padding: 2.5rem;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .day-body strong {
            color: #0f766e;
        }

        .cta-section {
            background: linear-gradient(90deg, #0f766e, #14b8a6);
            color: white;
            padding: 6rem 1rem;
            text-align: center;
        }

        .cta-button {
            background: white;
            color: #0f766e;
            font-weight: 700;
            font-size: 1.4rem;
            padding: 1.2rem 3.5rem;
            border-radius: 9999px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.4s ease;
        }

        .cta-button:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }

            .nav-links {
                display: none;
            }

            .day-header {
                font-size: 1.3rem;
            }
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

        <!-- Hero Title -->
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="hero-title">10-Day ABC & Manang Itinerary</h1>
        </div>
    </div>

    <!-- Itinerary Content -->
    <div class="content-container">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Day 1 -->
            <div class="day-card">
                <div class="day-header">Day 1: Arrival in Pokhara</div>
                <div class="day-body">
                    <p>Arrive in Pokhara. Transfer to hotel near Lakeside. Relax, explore the lake, and prepare gear.
                        Evening briefing with guide.</p>
                    <p><strong>Altitude:</strong> 827 m</p>
                    <p><strong>Accommodation:</strong> Hotel in Pokhara</p>
                </div>
            </div>

            <!-- Day 2 -->
            <div class="day-card">
                <div class="day-header">Day 2: Pokhara to Nayapul – Trek to Tikhedhunga</div>
                <div class="day-body">
                    <p>Short drive to Nayapul. Start trek along Modi River to Tikhedhunga. Enjoy waterfalls and green
                        hills.</p>
                    <p><strong>Trek:</strong> 4–5 hrs</p>
                    <p><strong>Altitude:</strong> 1,540 m</p>
                    <p><strong>Accommodation:</strong> Teahouse</p>
                </div>
            </div>

            <!-- Day 3 -->
            <div class="day-card">
                <div class="day-header">Day 3: Tikhedhunga to Ghorepani</div>
                <div class="day-body">
                    <p>Steep climb through rhododendron forest to Ulleri, then gradual ascent to Ghorepani. Famous for
                        Poon Hill sunrise next day.</p>
                    <p><strong>Trek:</strong> 6–7 hrs</p>
                    <p><strong>Altitude:</strong> 2,860 m</p>
                    <p><strong>Accommodation:</strong> Teahouse</p>
                </div>
            </div>

            <!-- Day 4 -->
            <div class="day-card">
                <div class="day-header">Day 4: Ghorepani to Poon Hill – Tadapani</div>
                <div class="day-body">
                    <p>Early morning hike to Poon Hill (3,210 m) for epic sunrise over Annapurna & Dhaulagiri. Trek to
                        Tadapani.</p>
                    <p><strong>Trek:</strong> 6 hrs</p>
                    <p><strong>Altitude:</strong> 2,630 m</p>
                </div>
            </div>

            <!-- Day 5 -->
            <div class="day-card">
                <div class="day-header">Day 5: Tadapani to Chomrong</div>
                <div class="day-body">
                    <p>Descend to Chomrong – gateway to ABC. Beautiful Gurung village with views of Machhapuchhre.</p>
                    <p><strong>Trek:</strong> 5–6 hrs</p>
                    <p><strong>Altitude:</strong> 2,170 m</p>
                </div>
            </div>

            <!-- Day 6 -->
            <div class="day-card">
                <div class="day-header">Day 6: Chomrong to Dovan</div>
                <div class="day-body">
                    <p>Pass through Sinuwa and Bamboo. Enter rhododendron and bamboo forest zone.</p>
                    <p><strong>Trek:</strong> 6 hrs</p>
                    <p><strong>Altitude:</strong> 2,630 m</p>
                </div>
            </div>

            <!-- Day 7 -->
            <div class="day-card">
                <div class="day-header">Day 7: Dovan to Deurali – Machhapuchhre Base Camp</div>
                <div class="day-body">
                    <p>Trek to Deurali then climb to Machhapuchhre Base Camp (MBC) – stunning views.</p>
                    <p><strong>Trek:</strong> 5–6 hrs</p>
                    <p><strong>Altitude:</strong> 3,700 m</p>
                </div>
            </div>

            <!-- Day 8 -->
            <div class="day-card">
                <div class="day-header">Day 8: MBC to Annapurna Base Camp (ABC)</div>
                <div class="day-body">
                    <p>Short but steep climb to ABC (4,130 m). 360° panorama of Annapurna range.</p>
                    <p><strong>Trek:</strong> 3–4 hrs</p>
                    <p><strong>Altitude:</strong> 4,130 m</p>
                </div>
            </div>

            <!-- Day 9 -->
            <div class="day-card">
                <div class="day-header">Day 9: ABC to Bamboo / Sinuwa</div>
                <div class="day-body">
                    <p>Descend back through MBC, Deurali, and Bamboo. Long day but mostly downhill.</p>
                    <p><strong>Trek:</strong> 7–8 hrs</p>
                </div>
            </div>

            <!-- Day 10 -->
            <div class="day-card">
                <div class="day-header">Day 10: Bamboo to Jhinu / Nayapul – Drive to Pokhara</div>
                <div class="day-body">
                    <p>Trek to Jhinu (hot springs), then to Nayapul. Drive back to Pokhara. Celebrate!</p>
                    <p><strong>Trek:</strong> 4–5 hrs + drive</p>
                    <p><strong>Altitude:</strong> 827 m (Pokhara)</p>
                </div>
            </div>
        </div>

        <!-- Final CTA -->
        <div class="cta-section">
            <h2 class="text-4xl font-bold mb-6">Ready for Your Himalayan Adventure?</h2>
            <a href="{{ route('trek.booking') }}" class="cta-button">
                Book Your ABC-Manang Trek Now
            </a>
        </div>
    </div>

</body>

</html>