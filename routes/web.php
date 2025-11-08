<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
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
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::controller(PostsController::class)->prefix('posts')->name('posts.')->group(function () 
{
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/edit/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});


