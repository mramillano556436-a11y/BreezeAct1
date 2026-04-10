<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Auth::user()->bookings;
        return view('BookingList', ['bookings' => $bookings]);
    }

    public function create()
    {
        $rooms = Room::all();
        return view('BookingView', ['rooms' => $rooms]);
    }
}
