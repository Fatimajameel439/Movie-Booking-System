<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Booking;
use App\Models\Theater;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class UserController extends Controller
{
     public function show_movies()
    {
        $movies = Movie::all();
        $Theaters = Theater::all();
        return view('index',compact('movies','Theaters'));
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    public function profile(Request $request){
        $bookings = Booking::where('user_id', Auth::id())->get();
        return view('profile',['bookings' => $bookings]);
    }
    
}
