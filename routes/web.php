<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::controller(AuthController::class)->group(function () 
{
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerStore')->name('registerStore');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});

