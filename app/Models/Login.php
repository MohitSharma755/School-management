<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
   protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $primaryKey = 'userId'; // Assuming the primary key is 'userId'
    protected $table = 'login'; // Assuming the table name is 'login'

    // You can add any additional methods or relationships here if needed
    public $timestamps = false; // If you don't have created_at and updated_at columns
}
