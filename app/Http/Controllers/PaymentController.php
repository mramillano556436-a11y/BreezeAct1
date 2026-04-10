<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class PaymentController extends Controller
{
    public function show(Booking $booking)
    {
        return view('PaymentView', ['booking' => $booking]);
    }
}
