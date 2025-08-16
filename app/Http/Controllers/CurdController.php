<?php

namespace App\Http\Controllers;
use App\Models\Student_Registration;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CurdController extends Controller
{
    public function studentsignup(Request $request){
        

    
        // 1. Validate the incoming request data
//         $validatedData = $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email', // 'unique' check against your table
//             'password' => 'required|string|min:8|confirmed',
//             'address' => 'required|string',
//             'class' => 'required|string|max:50',
//             'phoneNumber' => 'required|string|max:15',
//             'emergencyContact' => 'required|string|max:15',
//             'userId' => 'nullable|string',
//             'userType' => 'required|string',
//             'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         ]);
// dd($validatedData);
        // 2. Handle file upload first
        $fileName = null;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension(); // Use getClientOriginalExtension for a cleaner name
            $fileName = time() . '.' . $extension;
            $file->move(public_path('upload/student'), $fileName);
        }

        // 3. Create a new student object and assign values
        $student = new Student_Registration();
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->password = $request['password']; // Use the Hash facade
        $student->address = $request['address'];
        $student->class = $request['class'];
        $student->phoneNumber = $request['phoneNumber'];
        $student->emergencyContact = $request['emergency'];
        $student->userId = random_int(1,100);
        $student->userType = $request->input('usertype');
        $student->profilePicture = $fileName; // Assign the uploaded file name
        $student->registrationDate = now(); // Set the registration date
        // 4. Save the student object and check for success
        if ($student->save()) {
            // Registration successful
            return redirect()->route('Student')->with('success', 'Student registered successfully');
        } else {
            // Handle the unlikely case of a save failure
            return response()->json(['message' => 'Student registration failed'], 500);
        }
    }
// For student login
    public function studentlogin(Request $request){
        // dd($request->all());
        $name = $request->input('name');
        $password = $request->input('password');

        // Validate the name and password
        if (empty($name) || empty($password)) {
            return redirect()->back()->with('error', 'Name and password are required');
        }

        // Check if the user exists in the database
        $data = DB::table('student-_registration')->where('name', $name)->first();

        if (!$data || $data->password !== $password) {
            return redirect()->back()->withErrors(['message' => 'Invalid name or password']);
        }
        else{

            // If login is successful, redirect to the student dashboard
            return redirect()->route('studentdashboard')->with('success', 'Login successful');
        }

    }
}
