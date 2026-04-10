<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rooms routes
Route::middleware('auth')->group(function () {
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
});

// Bookings routes
Route::middleware('auth')->group(function () {
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
});

// Guest routes
Route::middleware('auth')->group(function () {
    Route::get('/guest', [GuestController::class, 'show'])->name('guest.show');
});

// Payment routes
Route::middleware('auth')->group(function () {
    Route::get('/bookings/{booking}/payment', [PaymentController::class, 'show'])->name('payments.show');
});

require __DIR__.'/auth.php';

