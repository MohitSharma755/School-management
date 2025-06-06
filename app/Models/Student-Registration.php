<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Registration extends Model
{
    protected $table = "student-_registration"; // Assuming the table name is 'student-_registration'
    protected $primaryKey = 'studentId'; // Assuming 'studentId' is the primary key
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'class',
        'phoneNumber',
        'emergencyContact',
        'remember_token',
        'userId',
        'userType',
        'profilePicture',
        'registrationDate',
       
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public $timestamps = true; // Assuming you want to use created_at and updated_at timestamps
    protected $casts = [
        'registrationDate' => 'datetime', // Cast registrationDate to a datetime type
    ];
    // You can add any additional methods or relationships here if needed
    public function getProfilePictureUrlAttribute()
    {
        return $this->profilePicture ? asset('storage/' . $this->profilePicture) : null;
    }
    public function getEmergencyContactPhoneFormattedAttribute()
    {
        return $this->emergencyContactPhone ? preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $this->emergencyContactPhone) : null;
}
}
