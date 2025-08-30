<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Models\Student_Registration;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CurdController extends Controller


{
    public function student(){
        return view('student/studentlogin');
    }
    public function studentpanel(){
        return view('student/spanel');
    }

    public function studentsignup(Request $request){




        // 2. Handle file upload first
        $fileName = null;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension(); // Use getClientOriginalExtension for a cleaner name
            $fileName = time() . '.' . $extension;
            $file->move(public_path('upload/student'), $fileName);
        }
        else{
            return redirect()->back()->with('error', 'Profile picture is required');
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
            return redirect()->route('student/student')->with('success', 'Student registered successfully');
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
            // $request->session()->put('name', $name);
            // $request->session()->put('password', $password);
            // $request->session()->put('userId', $data->userId);
            // $request->session()->put('email', $data->email);
            // dd($request->session()->get('user')->email);

            session(['user' => $data]); // Store user data in session
            // return redirect('student/spanel');

            return redirect()->route('student.studentdashboard',['user'=>$data->name])->with('success', 'Login successful');
        }

    }
    public function studentdashboard(){
        $user = session('user');

        if (!$user) {
            return redirect()->route('login')->withErrors(['message' => 'Session expired, please log in again.']);
        }

        return view('student/spanel', [
            'name' => $user->name,
            'password' => $user->password,
            'userId' => $user->userId,
        ]);

        // return view('spanel', ['name' => session('user')->name, 'password' => session('user')->password]);
    }
    // For student logout
    public function studentlogout(Request  $request){
        //  Optional: dd($request->session()->all()); // to debug current session
        // Perform logout logic here
        if(isset($request->user()->userId)){
            $request->session()->flush(); // Clear the session
            $request->session()->regenerate(true); // Regenerate the session ID
            return redirect()->route('student/student')->with('success', 'Logout successful');
        }
        else{
            return redirect()->route('student/student')->with('error', 'You are not logged in');
        }
    }

    // For get Student information
    public function getStudentInfo(Request $request){
        $request->validate([
            'name' => 'required|string|max:50',
            'password' => 'required|string|min:6|max:100'
        ]);
        // Get the authenticated student's information
        $student = DB::table('student-_registration')->where('studentId', $request->user()->studentId)->where('userId', $request->user()->id)->get();
        $studentInfo = Student_Registration::get();
if(count($student) > 0){
    session()->put('name', $request->name);
    if(session()->has('name')){
        // Student found, you can access the information
        $name = session()->get('name');
        $password = session()->get('password');
         return view('student/spanel',['name' => $name, 'password' => $password, 'studentInfo' => $studentInfo])->with('success', 'Student information retrieved successfully');
    }
     else{
            return redirect()->back()->with('error', 'Student not found');
        }
        // Check if the student exists
         if ($student->isEmpty()) {
            return redirect()->back()->with('error', 'Student not found');
        }
        else{
            // Student found, you can access the information
            $studentInfo = $student->first();
            return view('studentdashboard', compact('studentInfo'));
        }


        // return view('studentdashboard', compact('student'));
    }
}
}
