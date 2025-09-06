<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
               $table->string('name'); // Column for the student's name
            $table->string('email')->unique(); // Column for the student's email, must be unique  
            $table->string('password'); // Column for the student's password
            $table->string('address')->unique(); // Column for the student's address, nullable
            // $table->string('class'); // Column for the course the student is registering for
            $table->string('phoneNumber')->unique(); // Column for the student's phone number, unique
            $table->string('emergencyContact')->unique(); // Column for the emergency contact, unique
            $table->string('remember_token')->nullable(); // Column for the remember token, unique
            $table->string('userId')->unique(); // Assuming 'userId' is a unique identifier
            $table->string('userType')->default('student'); // Column for user type, defaulting to 'student'
            $table->string('profilePicture')->unique(); // Column for the student's profile picture, nullable
            $table->date('registrationDate'); // Column for the registration date
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};