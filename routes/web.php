<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;



Route::get('/', [RoomsController::class, 'index'])->name('index');

Route::view('/about', 'about')->name('about');

Route::get('/offers', [RoomsController::class, 'offers'])->name('offers');

Route::get('/rooms', [RoomsController::class, 'rooms'])->name('rooms');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::get('/roomsList', [RoomsController::class, 'roomsList'])->name('roomsList');

Route::get('/roomDetails/{room}', [RoomsController::class, 'roomDetails'])->name('roomDetails');

Route::post('/bookingForm', [BookingController::class, 'store'])->name('bookingForm');


Route::get('/welcome', function () {
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

require __DIR__.'/auth.php';
