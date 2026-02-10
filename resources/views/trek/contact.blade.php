<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Himalayan Harmony Treks</title>

    <!-- Tailwind CSS CDN (quick & easy - later switch to Vite) -->
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
            text-shadow: 0 8px 30px rgba(0,0,0,0.9);
        }

        .contact-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 6rem 1.5rem;
        }

        .contact-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            transition: all 0.4s ease;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.2);
        }

        .contact-header {
            background: linear-gradient(90deg, #0f766e, #14b8a6);
            color: white;
            padding: 2.5rem;
            text-align: center;
        }

        .contact-body {
            padding: 3rem 2.5rem;
        }

        .contact-info p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .contact-info strong {
            color: #0f766e;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: #0f766e;
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.2);
        }

        .submit-btn {
            width: 100%;
            background: #0f766e;
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
            padding: 1.2rem;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            background: #065f46;
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-title { font-size: 3rem; }
            .nav-links { display: none; }
            .contact-header h2 { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <div class="hero">
        <!-- Custom Navigation (no Breeze white bar) -->
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
            <h1 class="hero-title">Contact Us</h1>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="contact-container">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info & Form Card -->
            <div class="contact-card">
                <div class="contact-header">
                    <h2 class="text-3xl font-bold">Get in Touch</h2>
                    <p class="mt-3 text-lg opacity-90">We're here to help plan your dream trek</p>
                </div>
                <div class="contact-body">
                    <div class="contact-info">
                        <p><strong>Phone / WhatsApp:</strong> +977-980-1234567</p>
                        <p><strong>Email:</strong> info@himalayanharmony.com</p>
                        <p><strong>Office:</strong> Lakeside, Pokhara, Nepal</p>
                        <p><strong>Support Hours:</strong> 9 AM – 6 PM (Nepal Time)</p>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-xl font-semibold mb-6">Send Us a Message</h3>
                        <form action="#" method="POST" class="space-y-6">
                            @csrf
                            <input type="text" name="name" placeholder="Your Full Name" class="form-input" required>
                            <input type="email" name="email" placeholder="Your Email Address" class="form-input" required>
                            <input type="tel" name="phone" placeholder="Your Contact Number (WhatsApp)" class="form-input" required>
                            <textarea name="message" rows="6" placeholder="Your Message or Questions..." class="form-input" required></textarea>
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="contact-card overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4132!2d83.987!3d28.209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399593c6!2sPokhara!5e0!3m2!1sen!2snp!4v1700000000" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Final CTA -->
        <div class="text-center mt-16">
            <a href="{{ route('trek.booking') }}"
               class="inline-block bg-teal-600 hover:bg-teal-700 text-white font-bold text-xl px-16 py-5 rounded-full shadow-2xl hover:scale-105 transition">
                Book Your Trek Today
            </a>
        </div>
    </div>

</body>
</html>