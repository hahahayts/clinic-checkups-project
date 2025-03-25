<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage');
})->name('landingPage');

Route::get('/homepage', function () {
    return Inertia::render('User/Homepage');
})->name('homepage');

Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
