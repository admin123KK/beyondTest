<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Trek - Himalayan Harmony</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; }

        .hero {
            position: relative;
            height: 70vh;
            min-height: 500px;
            background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.85)),
                        url('{{ asset('images/home-pokhara-abc.jpg') }}') center/cover no-repeat fixed;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .nav {
            position: absolute;
            top: 0; left: 0; right: 0;
            z-index: 100;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255,255,255,0.15);
        }

        .logo { font-size: 2.2rem; font-weight: 800; color: white; text-shadow: 0 2px 10px rgba(0,0,0,0.6); }

        .nav-links a {
            color: white;
            font-weight: 500;
            margin-left: 2rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .nav-links a:hover { color: #a7f3d0; }

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
            box-shadow: 0 20px 50px rgba(0,0,0,0.25);
            padding: 3rem 2.5rem;
        }

        .package-option {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
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

        .form-input, .form-textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
        }

        .form-input:focus, .form-textarea:focus {
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

        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-6xl md:text-8xl font-extrabold">Book Your Trek</h1>
        </div>
    </div>

    <div class="booking-container">
        <div class="booking-card">
            <h2 class="text-3xl font-bold text-center mb-10">Choose Package & Book Now</h2>

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-6 mb-8 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('trek.storeBooking') }}" method="POST" class="space-y-8">
                @csrf

                <!-- Package Selection -->
                <div class="mb-8">
                    <label class="block text-xl font-semibold mb-4 text-gray-800">Which Package Interests You?</label>
                    <div class="space-y-4">
                        <label class="package-option flex items-center cursor-pointer">
                            <input type="radio" name="package" value="ABC Classic (10 Days)" class="w-6 h-6 text-teal-600" required>
                            <span class="ml-4 text-lg font-medium">ABC Classic – 10 Days (Pokhara to Annapurna Base Camp)</span>
                        </label>

                        <label class="package-option flex items-center cursor-pointer">
                            <input type="radio" name="package" value="ABC + Manang Extension (12-14 Days)" class="w-6 h-6 text-teal-600">
                            <span class="ml-4 text-lg font-medium">ABC + Manang Extension – 12-14 Days (Full Circuit)</span>
                        </label>

                        <label class="package-option flex items-center cursor-pointer">
                            <input type="radio" name="package" value="Custom / Private Trek" class="w-6 h-6 text-teal-600">
                            <span class="ml-4 text-lg font-medium">Custom Trek – Tell us your dates & preferences</span>
                        </label>
                    </div>
                </div>

                <!-- Form Fields -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-lg font-medium mb-2">Full Name</label>
                        <input type="text" name="name" class="form-input" placeholder="Your Full Name" required>
                    </div>

                    <div>
                        <label class="block text-lg font-medium mb-2">Email Address</label>
                        <input type="email" name="email" class="form-input" placeholder="your@email.com" required>
                    </div>

                    <div>
                        <label class="block text-lg font-medium mb-2">Contact Number (WhatsApp)</label>
                        <input type="tel" name="phone" class="form-input" placeholder="+977 980 123 4567" required>
                    </div>

                    <div>
                        <label class="block text-lg font-medium mb-2">Preferred Dates</label>
                        <input type="text" name="dates" class="form-input" placeholder="e.g. March 15 - March 25, 2025" required>
                    </div>
                </div>

                <div>
                    <label class="block text-lg font-medium mb-2">Number of People</label>
                    <input type="number" name="people" min="1" class="form-input w-32" placeholder="1" required>
                </div>

                <div>
                    <label class="block text-lg font-medium mb-2">Message / Special Requests</label>
                    <textarea name="message" rows="5" class="form-textarea" placeholder="Tell us more about your group, any special needs, or questions..."></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    Submit Booking Request
                </button>
            </form>

            <p class="text-center mt-8 text-gray-600">
                We will reply within 24 hours to confirm availability and finalize details.
            </p>
        </div>
    </div>

</body>
</html>