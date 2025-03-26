<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Guest

Route::middleware(['guest'])->group(function(){
    Route::get('/', function () {
        return Inertia::render('LandingPage');
    })->name('landingPage');
    
    // Route::get('/homepage', function () {
    //     return Inertia::render('User/Homepage');
    // })->name('homepage');
    
    Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
    Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login'); 
});


// Authenticated


Route::middleware(['auth'])->group(function(){
//   Route::inertia('/home','User/Homepage');
  Route::inertia('/home',[PagesController::class, 'userLayout']);
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});