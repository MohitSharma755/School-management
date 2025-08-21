<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CurdController;
use App\Http\Controllers\Register;
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

// Students section
Route::get('/Student', [UserController::class, 'student'])->name('student');
Route::get('/studentdashboard',[UserController::class,'studentdashboard'])->name('studentdashboard');
Route::get('/', function () {
    return view('welcome');
});

// Memebers Routes
Route::get('/member', [UserController::class, 'member'])->name('member');
Route::get('/Staff',[UserController::class,'memberlogin'])->name('staff');

// Admins Routes
Route::get('/AdminPanel', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/admin', [UserController::class, 'admin'])->name('admin');
// Route::get('login', function () {
//     return view ('login');
// });
// Route::get('register', function () {
//     return view('signup');
// });

// Route for forms
// Route::post('Login',[Register::class, 'login'])->name('login'); 
// Route::post('Student',[CurdController::class, 'student'])->name('student');
Route::post('studentsignup', [CurdController::class, 'studentsignup'])->name('studentsignup');
Route::post('studentlogin', [CurdController::class, 'studentlogin'])->name('studentlogin');
Route::get('studentlogout/', [CurdController::class, 'studentlogout'])->name('studentlogout');







// cache clear
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "All caches cleared!";
});
