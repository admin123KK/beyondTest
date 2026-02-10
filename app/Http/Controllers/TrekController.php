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
    public function storeBooking(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'dates' => 'required|string',
        ]);

        Booking::create($request->all());

        return redirect()->route('trek.home')->with('success', 'Booking submitted successfully!');
    }

    public function contact()
    {
        return view('trek.contact');

    }
}