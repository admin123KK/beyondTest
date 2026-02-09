<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');  // Show home page
    }

    public function register(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $user = User::create(['name' => $request->name]);
        session(['user_name' => $user->name]);  // Store name in session (no login)
        return redirect('/quiz');
    }
}