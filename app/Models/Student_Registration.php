<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Registration extends Model
{
    protected $table = "student-_registration"; // Assuming the table name is 'student-_registration'
    protected $primaryKey = 'studentId'; // Assuming 'studentId' is the primary key
    protected $fillable = [
       // Add this before creating the object

    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:student-_registration,email',
    'password' => 'required|min:6',
    'address' => 'required|string',
    'class' => 'required|string',
    'phoneNumber' => 'required|string|max:15',
    'emergencyContact' => 'required|string|max:15',
    'userType' => 'required|string',
    'registrationDate' => 'required|date',
    'profilePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    'userId' => 'required|unique:student-_registration,userId',
    'remember_token' => 'nullable|string',

];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
