<?php

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

use Illuminate\Support\Facades\Route;


Route::get('/', [RoomsController::class, 'index'])->name('index');

Route::view('/about', 'about')->name('about');

Route::get('/offers', [RoomsController::class, 'offers'])->name('offers');

Route::get('/rooms', [RoomsController::class, 'rooms'])->name('rooms');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::get('/roomsList', [RoomsController::class, 'roomsList'])->name('roomsList');

Route::get('/roomDetails/{room}', [RoomsController::class, 'roomDetails'])->name('roomDetails');

Route::post('/bookingForm', [BookingController::class, 'store'])->name('bookingForm');



