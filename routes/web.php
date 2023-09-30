<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

# FRONTEND ROUTES #
Route::view('/', 'front.welcome');

# BACKEND ROUTES #
Route::view('/dashboard', 'back.dashboard');
