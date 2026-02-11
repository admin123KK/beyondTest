<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrekController;

Route::get('/', function () {
    return view('welcome');
});

// Main dashboard (from Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Protected user management
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('users', UserController::class);
});

// Public trekking routes
Route::prefix('trek')->name('trek.')->group(function () {
    Route::get('/', [TrekController::class, 'home'])->name('home');
    Route::get('/about', [TrekController::class, 'about'])->name('about');
    Route::get('/itinerary', [TrekController::class, 'itinerary'])->name('itinerary');
    Route::get('/booking', [TrekController::class, 'booking'])->name('booking');
    Route::post('/booking', [TrekController::class, 'storeBooking'])->name('storeBooking');
    Route::get('/contact', [TrekController::class, 'contact'])->name('contact');
    Route::get('/gallery', [TrekController::class, 'gallery'])->name('gallery');
    Route::get('/admin/bookings', [TrekController::class, 'adminBookings'])->name('admin.bookings');
    // Removed duplicate /trek/dashboard — you don't need it
});