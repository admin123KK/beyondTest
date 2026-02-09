<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-6">
                        Welcome back, {{ Auth::user()->name }}!
                    </h1>

                    <!-- Success message example -->
                    @if (session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Quick links / cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-blue-50 dark:bg-blue-900/30 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold mb-2">Manage Users</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                Add, edit or delete user accounts
                            </p>
                            <a href="{{ route('users.index') }}"
                                class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                                Go to Users →
                            </a>
                        </div>

                        <div class="bg-green-50 dark:bg-green-900/30 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold mb-2">Your Profile</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                View and update your account
                            </p>
                            <a href="#"
                                class="inline-block bg-green-600/50 text-white px-4 py-2 rounded opacity-50 cursor-not-allowed">
                                Profile (coming soon)
                            </a>
                        </div>

                        <div class="bg-purple-50 dark:bg-purple-900/30 p-6 rounded-lg shadow">
                            <h3 class="text-lg font-semibold mb-2">Quiz Stats</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">
                                See your quiz history and scores
                            </p>
                            <a href="#"
                                class="inline-block bg-purple-600/50 text-white px-4 py-2 rounded opacity-50 cursor-not-allowed">
                                View Stats (coming soon)
                            </a>
                        </div>
                    </div>

                    <!-- Basic user info -->
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4">Account Information</h3>
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Joined:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>