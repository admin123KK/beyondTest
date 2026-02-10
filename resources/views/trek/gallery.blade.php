<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Himalayan Harmony Treks</title>

    <!-- Tailwind CSS CDN (quick development) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
        }

        .hero {
            position: relative;
            height: 90vh;
            min-height: 700px;
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.85)),
                url('{{ asset('images/cloud.jpg') }}') center/cover no-repeat fixed;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-title {
            font-size: clamp(3rem, 10vw, 8rem);
            font-weight: 800;
            line-height: 1;
            text-shadow: 0 12px 40px rgba(0, 0, 0, 0.8);
        }

        .hero-subtitle {
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            font-weight: 300;
            max-width: 900px;
            margin: 1.5rem auto 3rem;
            opacity: 0.95;
        }

        .gallery-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 5rem 1.5rem;
        }

        .masonry-grid {
            column-count: 4;
            column-gap: 1.5rem;
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            position: relative;
        }

        .masonry-item:hover {
            transform: scale(1.04);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
        }

        .masonry-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 16px;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.7));
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 1.5rem;
        }

        .masonry-item:hover .overlay {
            opacity: 1;
        }

        .overlay-text {
            font-size: 1.2rem;
            font-weight: 600;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        }

        @media (max-width: 1024px) {
            .masonry-grid {
                column-count: 3;
            }
        }

        @media (max-width: 768px) {
            .masonry-grid {
                column-count: 2;
            }

            .hero-title {
                font-size: 4rem;
            }

            .hero-subtitle {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 480px) {
            .masonry-grid {
                column-count: 1;
            }
        }
    </style>
</head>

<body>

    <div class="hero">
        <!-- Custom Navigation (no Breeze bar) -->
        <nav class="absolute top-0 left-0 right-0 z-50 bg-white/15 backdrop-blur-lg border-b border-white/20">
            <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
                <a href="{{ route('trek.home') }}" class="text-3xl font-extrabold text-white tracking-tight">
                    Himalayan Harmony
                </a>

                <div class="hidden md:flex space-x-12 text-lg">
                    <a href="{{ route('trek.home') }}" class="text-white hover:text-teal-300 transition">Home</a>
                    <a href="{{ route('trek.about') }}" class="text-white hover:text-teal-300 transition">About</a>
                    <a href="{{ route('trek.itinerary') }}"
                        class="text-white hover:text-teal-300 transition">Itinerary</a>
                    <a href="{{ route('trek.gallery') }}"
                        class="text-white hover:text-teal-300 transition font-bold">Gallery</a>
                    <a href="{{ route('trek.booking') }}" class="text-white hover:text-teal-300 transition">Booking</a>
                </div>

                <div class="md:hidden text-white text-4xl cursor-pointer">☰</div>
            </div>
        </nav>

        <!-- Hero Title -->
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="hero-title">Gallery</h1>
            <p class="hero-subtitle">
                Moments of wonder from the heart of the Himalayas
            </p>
        </div>
    </div>

    <!-- Gallery Masonry Grid -->
    <div class="gallery-container">
        <div class="masonry-grid">
            <!-- Photo 1 – Children smiling -->
            <div class="masonry-item">
                <img src="https://tse4.mm.bing.net/th/id/OIP.KJ9UfRK_YTa5Y19tS60wXgHaFj?rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Himalayan children smiling">
                <div class="overlay">
                    <span class="overlay-text">Smiles in the mountains</span>
                </div>
            </div>

            <!-- Photo 2 – Village kids playing -->
            <div class="masonry-item">
                <img src="https://tse3.mm.bing.net/th/id/OIP.i1O4MjKI2KL3uh93VzvXZgHaE8?rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Kids playing in Gurung village">
                <div class="overlay">
                    <span class="overlay-text">Joy of mountain childhood</span>
                </div>
            </div>

            <!-- Photo 3 – Porter child carrying basket -->
            <div class="masonry-item">
                <img src="https://tse3.mm.bing.net/th/id/OIP.3fXooiVmZyYFtD7_i3d6iQHaEK?w=3000&h=1688&rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Young helper on the trail">
                <div class="overlay">
                    <span class="overlay-text">Little helpers on the path</span>
                </div>
            </div>

            <!-- Photo 4 – Annapurna kids with prayer flags -->
            <div class="masonry-item">
                <img src="https://tse4.mm.bing.net/th/id/OIP.PSLT6yCCGhJbWu80NfMtVAHaE8?w=1600&h=1067&rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Children with prayer flags">
                <div class="overlay">
                    <span class="overlay-text">Prayer flags & bright faces</span>
                </div>
            </div>

            <!-- Photo 5 – School kids in Manang -->
            <div class="masonry-item">
                <img src="https://tse1.mm.bing.net/th/id/OIP.tBzNKyw1Lk3zaQguhUeEGwHaFj?rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="School children in Manang">
                <div class="overlay">
                    <span class="overlay-text">Learning in the clouds</span>
                </div>
            </div>

            <!-- Photo 6 – Toddler in traditional dress -->
            <div class="masonry-item">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Little one in traditional attire">
                <div class="overlay">
                    <span class="overlay-text">Tradition passed to the young</span>
                </div>
            </div>

            <!-- Photo 7 – Kids running on trail -->
            <div class="masonry-item">
                <img src="https://tse3.mm.bing.net/th/id/OIP.xwmRo7PRQCLToMRxcrYVdQHaKi?rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Children running on mountain path">
                <div class="overlay">
                    <span class="overlay-text">Running free in the Himalayas</span>
                </div>
            </div>

            <!-- Photo 8 – Family portrait on viewpoint -->
            <div class="masonry-item">
                <img src="https://tse4.mm.bing.net/th/id/OIP.EM0FIcINE36HMlZxsK6z_AHaEK?rs=1&pid=ImgDetMain&o=7&rm=3"
                    alt="Family at mountain viewpoint">
                <div class="overlay">
                    <span class="overlay-text">Family moments at high altitude</span>
                </div>
            </div>

            <!-- Add 4–6 more images as you wish (Unsplash trekking / Himalayan kids) -->
        </div>
    </div>

</body>

</html>