<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth_attempt'])->name('login.attempt');

    Route::get('/register', [AuthController::class, 'registration']);
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        $user = Auth::user();
        return view('dashboard', ['user' => $user]);
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', function () {});
});
