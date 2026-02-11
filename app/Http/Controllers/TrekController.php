<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;  // We'll create this next

class TrekController extends Controller
{
    public function home()
    {
        return view('trek.home');
    }

    public function about()
    {
        return view('trek.about');
    }

    public function itinerary()
    {
        return view('trek.itinerary');
    }

    public function booking()
    {
        return view('trek.booking');
    }
    public function gallery()
    {
        return view('trek.gallery');
    }
    public function adminBookings()
    {
        $bookings = Booking::latest()->get();
        return view('admin.bookings', compact('bookings'));
    }
    public function storeBooking(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'package' => 'required|string|max:255',
            'dates' => 'required|string|max:100',
            'people' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        Booking::create($validated);

        return redirect()->back()->with('success', 'Booking request submitted! We will contact you soon.');
    }
    public function contact()
    {
        return view('trek.contact');

    }
}