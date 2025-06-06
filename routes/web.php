<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
// Route::get('/profile', [UserController::class, 'profile'])->name('profile');
// Route::get('/settings', [UserController::class, 'settings'])->name('settings');
// Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot-password');
// Route::get('/reset-password', [UserController::class, 'resetPassword'])->name('reset-password');
// Route::get('/verify-email', [UserController::class, 'verifyEmail'])->name('verify-email');
// Route::get('/terms-of-service', [UserController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/', function () {
    return view('welcome');
});
// Route::get('login', function () {
//     return view ('login');
// });
// Route::get('register', function () {
//     return view('signup');
// });
