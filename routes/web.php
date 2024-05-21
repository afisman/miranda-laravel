<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
require_once __DIR__ . '/../helpers/helpers.php';


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::view('/about', 'about')->name('about');

