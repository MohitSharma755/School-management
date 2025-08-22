<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table="admin"; // Table name
    protected $primaryKey = 'adminId'; // Primary Key
    protected $fillable=[
        'name'=> 'required|string|max:255',
        'email'=> 'required|email|max:255',
        'usertype'=> 'required|string|max:50',
        'userId'=> 'required|unique:admin,userId',
        'password'=> 'required|string|min:6',
    ];

}
