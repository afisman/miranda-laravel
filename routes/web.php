<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderController;


Route::get('/', [RoomsController::class, 'index'])->name('index');

Route::view('/about', 'about')->name('about');

Route::get('/offers', [RoomsController::class, 'offers'])->name('offers');

Route::get('/rooms', [RoomsController::class, 'rooms'])->name('rooms');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');

Route::get('/roomsList', [RoomsController::class, 'roomsList'])->name('roomsList');

Route::get('/roomDetails/{room}', [RoomsController::class, 'roomDetails'])->name('roomDetails');

Route::post('/bookingForm', [BookingController::class, 'store'])->name('bookingForm');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [OrderController::class, 'index'])->name('dashboard');
    Route::get('/order/{order}', [OrderController::class, 'orderDetails'])->name('orderDetails');

    Route::post('/order', [OrderController::class, 'create'])->name('orderCreate');

    Route::get('/order/edit/{order}', [OrderController::class, 'edit'])->name('orderEdit');
    Route::patch('/order/edit/{order}', [OrderController::class, 'patch'])->name('orderPatch');
    
    Route::delete('/order/{order}', [OrderController::class, 'delete'])->name('orderDelete');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
