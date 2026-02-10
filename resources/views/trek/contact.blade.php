<x-app-layout>
    <!-- Custom styles -->
    @push('styles')
        <style>
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
        </style>
    @endpush

    <!-- Hero with your image -->
    <div class="hero">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="hero-title">Contact Us</h1>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="contact-container">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info Card -->
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
                        <h3 class="text-xl font-semibold mb-4">Quick Message</h3>
                        <form action="#" method="POST" class="space-y-6">
                            @csrf
                            <input type="text" name="name" placeholder="Your Name" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <input type="email" name="email" placeholder="Your Email" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
                            <textarea name="message" rows="5" placeholder="Your Message" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
                            <button type="submit" class="w-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-4 rounded-lg transition">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Map / Extra Info -->
            <div class="contact-card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4132!2d83.987!3d28.209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399593c6!2sPokhara!5e0!3m2!1sen!2snp!4v1700000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="{{ route('trek.booking') }}"
               class="inline-block bg-teal-600 hover:bg-teal-700 text-white font-bold text-xl px-16 py-5 rounded-full shadow-2xl hover:scale-105 transition">
                Book Your Trek Today
            </a>
        </div>
    </div>
</x-app-layout>