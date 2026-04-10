<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function show()
    {
        return view('Customer.GuestView');
    }
}
