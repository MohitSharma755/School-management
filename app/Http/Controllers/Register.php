<?php

namespace App\Http\Controllers;
use App\Models\Student_Registration;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function login(Request $request)
    {
        echo "Login method called";
        // Validate the request data
       
   
}
    public function register(Request $request)
    {
        // echo "Register method called";
    //   dd($request->all());
    // data is coming from the form;

        // Validate the request data
        $registration_object = new Student_Registration();
        $registration_object->name = $request->name;
        $registration_object->email = $request->email;
        $registration_object->password = bcrypt($request->password);                
        $registration_object->address = $request->address;
        $registration_object->class = $request->class;
        $registration_object->phoneNumber = $request->phoneNumber;
        $registration_object->emergencyContact = $request->emergency;
        
        // Add these missing fields:
// $registration_object->userId = $request->userId ?? null; // or some default value
$registration_object->userType = $request->usertype ?? 'student'; // or appropriate default
$registration_object->registrationDate = $request->date ; // current date as default
// $registration_object->profilePicture = $request->img; // Assuming this is a file upload
        // Handle file upload for profile picture if provided
        // if ($request->hasFile('img')) {
        //     $profilePicturePath = $request->file('img')->store('profile_pictures', 'public');
        //     $registration_object->profilePicture = $profilePicturePath; // Store the path to the profile picture
        // } else {
        //     $registration_object->profilePicture = null; // No profile picture uploaded
        // }
          // Upload file code
        $file = $request->file('img');
        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        $extension = $file->getClientOriginalName();
        $fileName = time() . '.' . $extension;
        $file->move('upload/student', $fileName);
        $registration_object->image = $fileName;
        // Debug: Check what data is being set
dd([
    'object_data' => $registration_object->toArray(),
    'save_result' => $registration_object->save(),
    'errors' => $registration_object->getErrors() ?? 'No errors method'
]);
        // $registration_object->userType = 'student'; // Assuming a default user type
      $result = $registration_object->save();

if ($result) {
    echo "Data saved successfully!";
    return redirect()->back()->with('success', 'Registration successful!');
} else {
    echo "Failed to save data!";
    dd($registration_object->getErrors());
}
    }

}