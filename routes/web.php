<?php

use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;
// require_once __DIR__ . '/../helpers/helpers.php';


Route::get('/', [RoomsController::class, 'index'])->name('index');

Route::view('/about', 'about')->name('about');

Route::get('offers', [RoomsController::class, 'offers'])->name('offers');

