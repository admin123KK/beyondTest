<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Trek - Himalayan Harmony</title>

    <!-- Tailwind CSS CDN (quick setup – replace with Vite later) -->
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

        .hero-title {
            font-size: clamp(3rem, 10vw, 5rem);
            font-weight: 800;
            text-shadow: 0 8px 30px rgba(0,0,0,0.9);
        }

        .booking-container {
            max-width: 900px;
            margin: -6rem auto 0;
            padding: 0 1.5rem;
            position: relative;
            z-index: 10;
        }

        .booking-card {
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.25);
            padding: 3rem 2.5rem;
        }

        .package-option {
            display: flex;
            align-items: center;
            margin-bottom: 1.2rem;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .package-option:hover, .package-option.selected {
            border-color: #0f766e;
            background: rgba(15,118,110,0.05);
        }

        .package-label {
            font-weight: 600;
            color: #111827;
            margin-left: 1rem;
            flex: 1;
        }

        .form-group {
            margin-bottom: 1.8rem;
        }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.6rem;
            color: #1f2937;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: #0f766e;
            box-shadow: 0 0 0 4px rgba(15,118,110,0.15);
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(90deg, #0f766e, #14b8a6);
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
            padding: 1.3rem;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: all 0.4s;
        }

        .submit-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 40px rgba(15,118,110,0.4);
        }
    </style>
</head>
<body>

    <div class="hero">
        <!-- Custom Navigation (no Breeze bar) -->
        <nav class="absolute top-0 left-0 right-0 z-50 bg-white/20 backdrop-blur-md border-b border-white/20">
            <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
                <a href="{{ route('trek.home') }}" class="text-2xl font-bold text-white">Himalayan Harmony</a>

                <div class="hidden md:flex space-x-10">
                    <a href="{{ route('trek.home') }}" class="text-white hover:text-teal-300 transition">Home</a>
                    <a href="{{ route('trek.about') }}" class="text-white hover:text-teal-300 transition">About</a>
                    <a href="{{ route('trek.itinerary') }}" class="text-white hover:text-teal-300 transition">Itinerary</a>
                    <a href="{{ route('trek.gallery') ?? '#' }}" class="text-white hover:text-teal-300 transition">Gallery</a>
                    <a href="{{ route('trek.booking') }}" class="text-white hover:text-teal-300 transition">Booking</a>
                </div>

                <div class="md:hidden text-white text-3xl cursor-pointer">☰</div>
            </div>
        </nav>

        <!-- Hero Title -->
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="hero-title">Book Your Adventure</h1>
        </div>
    </div>

    <!-- Booking Form -->
    <div class="booking-container">
        <div class="booking-card">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">Choose Your Package & Fill Details</h2>

            <form action="{{ route('trek.storeBooking') }}" method="POST" class="space-y-8">
                @csrf

                <!-- Package Selection -->
                <div class="mb-8">
                    <label class="form-label text-xl">Which Package Would You Like?</label>
                    <div class="space-y-4">
                        <label class="package-option flex items-center cursor-pointer">
                            <input type="radio" name="package" value="ABC Classic (10 Days)" class="w-5 h-5 text-teal-600" required>
                            <span class="package-label">ABC Classic (10 Days) – Pokhara to Annapurna Base Camp</span>
                        </label>

                        <label class="package-option flex items-center cursor-pointer">
                            <input type="radio" name="package" value="ABC + Manang Extension (12-14 Days)" class="w-5 h-5 text-teal-600">
                            <span class="package-label">ABC + Manang Extension (12-14 Days) – Full Circuit</span>
                        </label>

                        <label class="package-option flex items-center cursor-pointer">
                            <input type="radio" name="package" value="Custom / Private Trek" class="w-5 h-5 text-teal-600">
                            <span class="package-label">Custom / Private Trek – Tell us your dates & group size</span>
                        </label>
                    </div>
                </div>

                <!-- Personal Details -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-input" placeholder="Your Full Name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-input" placeholder="your@email.com" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Contact Number (WhatsApp preferred)</label>
                        <input type="tel" name="phone" class="form-input" placeholder="+977 980 123 4567" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Preferred Travel Dates</label>
                        <input type="text" name="dates" class="form-input" placeholder="e.g. March 15 - March 25, 2025" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Number of People</label>
                    <input type="number" name="people" min="1" class="form-input" placeholder="1" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Additional Message / Special Requests</label>
                    <textarea name="message" rows="5" class="form-textarea" placeholder="Dietary needs, group details, difficulty preference, any questions..."></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    Submit Booking Request
                </button>
            </form>

            <p class="text-center mt-8 text-sm text-gray-600">
                We will contact you within 24 hours to confirm availability, price, and next steps.
            </p>
        </div>

        <!-- Back link -->
        <div class="text-center mt-10">
            <a href="{{ route('trek.contact') }}"
               class="text-teal-600 hover:text-teal-800 font-medium">
                ← Have questions? Go to Contact Page
            </a>
        </div>
    </div>

</body>
</html>