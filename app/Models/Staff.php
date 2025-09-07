<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
 protected $table = "staff";
 protected $primaryKey = "id";
protected $fillable =[
       // Add this before creating the object

    'name' => 'required|string|max:255',
    'email' => 'required|email',
    'password' => 'required|min:6',
    'address' => 'required|string',
    // 'class' => 'required|string',
    'phoneNumber' => 'required|string|max:15',
    'emergencyContact' => 'required|string|max:15',
    'userId' => 'required|unique:staff,userId',
    'userType' => 'required|string',
    'registrationDate' => 'required|date',
    'profilePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    'remember_token' => 'nullable|string',

];
}
