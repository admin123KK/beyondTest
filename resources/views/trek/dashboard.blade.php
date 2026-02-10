<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                    <!-- Welcome Section -->
                    <div class="mb-10 text-center">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">
                            Welcome back, {{ Auth::user()->name }}!
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-400">
                            You're logged in. Explore your account or features below.
                        </p>
                    </div>

                    <!-- Messages -->
                    @if (session('success'))
                        <div class="mb-8 p-5 bg-green-50 dark:bg-green-900/30 border-l-4 border-green-500 text-green-800 dark:text-green-200 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Action Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-800/30 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                            <div class="text-center mb-6">
                                <span class="text-6xl">👥</span>
                            </div>
                            <h3 class="text-2xl font-bold text-center mb-3 text-blue-800 dark:text-blue-300">
                                Manage Users
                            </h3>
                            <p class="text-center text-gray-600 dark:text-gray-400 mb-6">
                                Add, edit, or delete user accounts
                            </p>
                            <div class="text-center">
                                <a href="{{ route('users.index') }}"
                                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold shadow-md transition">
                                    Open Users →
                                </a>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/30 dark:to-green-800/30 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                            <div class="text-center mb-6">
                                <span class="text-6xl">🧑‍💻</span>
                            </div>
                            <h3 class="text-2xl font-bold text-center mb-3 text-green-800 dark:text-green-300">
                                Your Profile
                            </h3>
                            <p class="text-center text-gray-600 dark:text-gray-400 mb-6">
                                Update your personal details
                            </p>
                            <div class="text-center">
                                <span class="inline-block bg-green-600/60 text-white px-8 py-3 rounded-full font-semibold cursor-not-allowed">
                                    Coming Soon
                                </span>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/30 dark:to-purple-800/30 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                            <div class="text-center mb-6">
                                <span class="text-6xl">🏔️</span>
                            </div>
                            <h3 class="text-2xl font-bold text-center mb-3 text-purple-800 dark:text-purple-300">
                                Trekking Site
                            </h3>
                            <p class="text-center text-gray-600 dark:text-gray-400 mb-6">
                                Explore Pokhara to ABC & Manang
                            </p>
                            <div class="text-center">
                                <a href="{{ route('trek.home') }}"
                                   class="inline-block bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-full font-semibold shadow-md transition">
                                    Visit Trekking →
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Account Info -->
                    <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-lg">
                        <h3 class="text-2xl font-bold mb-6 text-center">Your Account Details</h3>
                        <div class="grid md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                            <div class="text-center">
                                <p class="text-sm text-gray-500 dark:text-gray-400">Full Name</p>
                                <p class="text-xl font-semibold">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="text-center">
                                <p class="text-sm text-gray-500 dark:text-gray-400">Email</p>
                                <p class="text-xl font-semibold">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="text-center">
                                <p class="text-sm text-gray-500 dark:text-gray-400">Member Since</p>
                                <p class="text-xl font-semibold">{{ Auth::user()->created_at->format('d F Y') }}</p>
                            </div>
                            <div class="text-center">
                                <p class="text-sm text-gray-500 dark:text-gray-400">Last Login</p>
                                <p class="text-xl font-semibold">
                                    {{ Auth::user()->last_login_at 
                                        ? Auth::user()->last_login_at->format('d F Y h:i A') 
                                        : 'This session' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Logout -->
                    <div class="mt-12 text-center">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="inline-block bg-red-50 hover:bg-red-100 dark:bg-red-900/30 dark:hover:bg-red-900/50 text-red-700 dark:text-red-300 font-medium px-10 py-4 rounded-full border border-red-200 dark:border-red-800 transition">
                                Sign Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>