<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function staffloginpage(){
        return view('staff/loginstaff');
    }
    public function staffregisterpage(){
        return view('staff/members');
    }
    public function createmember(Request $request){

        // dd($request->all());
        // Handle filename first

        // Here you can add the code to create a new staff member

         $fileName = 'default_profile4.jpg';
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension(); // Use getClientOriginalExtension for a cleaner name
            $fileName = time() . '.' . $extension;
            $file->move(public_path('upload/student'), $fileName);
        }
        // else{
        //     return redirect()->back()->with('erroe','Not success');
        // }
        $staff = new Staff();
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->password = bcrypt($request->input('password')); // Hash the password
        $staff->address = $request->input('address');
        $staff->phoneNumber = $request->input('phoneNumber');
        $staff->emergencyContact = $request->input('emergency');
        $staff->remember_token = $request->input('remember_token');
        $staff->userId = random_int(-1,1000);
        $staff->userType = $request->input('usertype');
        $staff->profilePicture=$request->input('img');
        $staff->registrationDate = now();
        // Set the registration date to current date
        if ($staff->save() && $staff->userType=='Librariyan') {
            return redirect()->route('library')->with('success', 'library');
        }
        // else if($staff->save() && $staff->userType=='teachers'){
        //     return redirect()->route('teachers')->with('success', 'Teachers.');
        // }
        else if($staff->save() && $staff->userType=='staff'){
            return redirect()->route('Staff')->with('success','staff');

        }
        else{
            return redirect()->back()->with('error', 'Failed to create staff member. Please try again.');
        }
    }
}