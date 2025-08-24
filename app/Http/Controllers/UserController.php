<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

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

    //    for members 
    public function member()
    {
        return view('members');
    }
    public function memberlogin()
    {
        return view('loginstaff');
    }
    // Students section
    public function student()
    {
        return view('studentlogin');
    }
    public function register()
    {
        return view('studentsignup');
    }
    public function studentdashboard()
    {
        return view('spanel');
    }


    //    For admin dashboard
    public function admin()
    {
        return view('admin/welcome');
    }

     public function adminregister(){
        return view('admin/adminregister');
     }

    //  Admin registration
    public function adminsignup(Request $request)
    {
    //    dd($request->all());
     // 2. Handle file upload first
     $fileName = null;
     if ($request->hasFile('img')) {
         $file = $request->file('img');
         $extension = $file->getClientOriginalExtension(); // Use getClientOriginalExtension for a cleaner name
         $fileName = time() . '.' . $extension;
         $file->move(public_path('upload/admin'), $fileName);
     }
     else{
         return redirect()->back()->with('error', 'Profile picture is required');
     }
    //  Create a admin object for insert data;
    $admin = new Admin();
    $admin->name = $request['name'];
    $admin->email = $request['email'];
    $admin->usertype= $request['role'];
    $admin->userId = random_int(1,100);
    $admin->password = $request['password'];
    $admin->profilePicture = $fileName; // Assign the uploaded file name
    if($admin->save()){
        return redirect()->route('admin')->with('success','Admin registered successfully');
    }
    else{
        return response()->json(['message' => 'Admin registration failed'], 500);
    }

}
    // Admin Login
    public function adminlogin(Request $request){
        // dd($request->all());
        $admin=Admin::where('name',$request->name)
        ->where('password',$request->password);
        if($admin->exists()){
            $request->session()->put('ADMIN_LOGIN',true);
            $request->session()->put('ADMIN_NAME',$request->name);
            return redirect('AdminPanel',['session'=>$request->name])->with('success','Welcome to Admin Panel');
        }
        else{
            return redirect()->back()->with('error','Please enter valid login details');
        }
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

    //    Forms Routes
    public function studentdata(Request $request)
    {
        // Handle the student registration logic here
        // For example, you can validate and save the data to the database
        // return redirect()->route('studentdashboard');
        return "Student data submitted successfully!";
    }
}
