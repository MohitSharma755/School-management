<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
       return view('welcome');
   }
   public function Login()
   {
       return view('login');
   }
   public function register()
   {
       return view('studentsignup');
   }
   public function member(){
    return view('members');
   }
   public function student(){
       return view('studentlogin');    
   }
//    For admin dashboard
   public function admin(){
    return view('admin/welcome');
    }

   public function dashboard()
   {
       return view('admin/admindashboard');
   }
   public function profile()
   {
       return view('profile');
   }
   public function settings()
   {
       return view('settings');
   }
   public function logout()
   {
       // Logic for logging out the user
       return redirect()->route('login');
   }
   public function forgotPassword()
   {
       return view('forgot-password');
   }
   public function resetPassword()
   {
       return view('reset-password');
   }
   public function verifyEmail()
   {
       return view('verify-email');
   }
   public function termsOfService()
   {
       return view('terms-of-service');
   }                
}
