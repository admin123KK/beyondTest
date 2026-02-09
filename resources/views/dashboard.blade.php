<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Greeting Section -->
            <div class="mb-10">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                    Hello, {{ Auth::user()->name }} 👋
                </h1>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
                    Here's a quick overview of your account and available actions.
                </p>
            </div>

            <!-- Messages -->
            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/30 border-l-4 border-green-500 text-green-700 dark:text-green-300 rounded-r-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/30 border-l-4 border-red-500 text-red-700 dark:text-red-300 rounded-r-lg">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Main Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                <!-- Manage Users Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Manage Users
                            </h3>
                            <span class="text-blue-600 dark:text-blue-400 text-xl">👥</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm">
                            Add, edit, view or remove user accounts
                        </p>
                        <a href="{{ route('users.index') }}"
                           class="inline-flex items-center px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition">
                            Open User Management →
                        </a>
                    </div>
                </div>

                <!-- Profile Card (placeholder) -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden border border-gray-200 dark:border-gray-700 opacity-90">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Your Profile
                            </h3>
                            <span class="text-green-600 dark:text-green-400 text-xl">🧑‍💻</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm">
                            Update your personal information and preferences
                        </p>
                        <button disabled
                                class="inline-flex items-center px-5 py-2.5 bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-gray-300 text-sm font-medium rounded-lg cursor-not-allowed">
                            Available soon
                        </button>
                    </div>
                </div>

                <!-- Quiz Stats Card (placeholder) -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden border border-gray-200 dark:border-gray-700 opacity-90">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Quiz Activity
                            </h3>
                            <span class="text-purple-600 dark:text-purple-400 text-xl">🎯</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm">
                            View your quiz history, scores and performance
                        </p>
                        <button disabled
                                class="inline-flex items-center px-5 py-2.5 bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-gray-300 text-sm font-medium rounded-lg cursor-not-allowed">
                            Available soon
                        </button>
                    </div>
                </div>
            </div>

            <!-- Account Information Section -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Account Information
                    </h3>
                </div>
                <div class="p-6">
                    <dl class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Full Name</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100 font-medium">
                                {{ Auth::user()->name }}
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Email Address</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100 font-medium">
                                {{ Auth::user()->email }}
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Member Since</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100 font-medium">
                                {{ Auth::user()->created_at->format('d F Y') }}
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Last Login</dt>
                            <dd class="mt-1 text-gray-900 dark:text-gray-100 font-medium">
                                {{ Auth::user()->last_login_at 
                                    ? Auth::user()->last_login_at->format('d F Y - h:i A') 
                                    : 'This session' }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Footer actions -->
            <div class="mt-10 flex justify-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-red-50 hover:bg-red-100 dark:bg-red-900/30 dark:hover:bg-red-900/50 text-red-700 dark:text-red-300 font-medium rounded-lg transition border border-red-200 dark:border-red-800">
                        Sign Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>