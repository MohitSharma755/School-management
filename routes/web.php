<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CurdController;
use App\Http\Controllers\Register;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Staff;
use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return view('welcome');
});

// Memebers Routes
Route::get('/member', [Staff::class, 'staffregisterpage'])->name('member');
Route::get('/Staff', [Staff::class, 'staffloginpage'])->name('staff');
Route::get('panel',[Staff::class,'dashboard'])->name('staffpanel');
Route::get('forgetpassword',[Staff::class,'recoverpass'])->name('staffpass');
// For forms
Route::post('staffregistration',[Staff::class,'staffregister'])->name('staffregistartion');
Route::post('stafflogin',[Staff::class,'loginstaff'])->name('stafflogin');


// Teachers routing
Route::get('/teachers', [TeacherController::class, 'Teacherloginpage'])->name('teachers');
Route::get('/teachersignup', [TeacherController::class, 'Teacherregisartionpage'])->name('Teachersignup');
Route::post('/TeacherRegistration',[TeacherController::class,'Teacherregister'])->name('TeacherRegistration');
Route::post('teacherlogin',[TeacherController::class,'Teacherlogin'])->name('teacherlogin');

// Admins Routes
Route::get('/adminregister', [UserController::class, 'adminregister'])->name('adminregister');
Route::get('/AdminPanel', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/admin', [UserController::class, 'admin'])->name('admin');
Route::post('/adminsignup', [UserController::class, 'adminsignup'])->name('adminsignup');
Route::post('/adminlogin', [UserController::class, 'adminlogin'])->name('adminlogin');
Route::post('/adminlogout', [UserController::class, 'adminlogout'])->name('adminlogout');


// Route for forms

Route::get('Student', [CurdController::class, 'student'])->name('student');
Route::post('studentdashboard', [CurdController::class, 'studentpanel'])->name('studentpanel');
Route::get('studentregister', [CurdController::class, 'studentregistration'])->name('studentregister');
Route::post('studentsignup', [CurdController::class, 'studentsignup'])->name('studentsignup');
Route::post('studentlogin', [CurdController::class, 'studentlogin'])->name('studentlogin');
Route::get('studentlogout', [CurdController::class, 'studentlogout'])->name('studentlogout');


// Library Routes
Route::get('library', [LibraryController::class, 'library'])->name('library');
Route::get('libraryportal',[LibraryController::class,'portal'])->name('libraryportal');





// cache clear
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "All caches cleared!";
});
// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
// Route::get('/profile', [UserController::class, 'profile'])->name('profile');
// Route::get('/settings', [UserController::class, 'settings'])->name('settings');
// Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot-password');
// Route::get('/reset-password', [UserController::class, 'resetPassword'])->name('reset-password');
// Route::get('/verify-email', [UserController::class, 'verifyEmail'])->name('verify-email');
// Route::get('/terms-of-service', [UserController::class, 'termsOfService'])->name('terms-of-service');