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
        Schema::create('logins', function (Blueprint $table) {
            $table->id('studentId'); // Assuming 'studentId' is the primary key
            $table->string('name'); // Column for the user's name
            $table->string('email')->unique(); // Column for the user's email, must be unique
            $table->string('password'); // Column for the user's password
            $table->string('remember_token')->nullable(); // Column for the remember token, nullable
            $table->string('userId')->unique(); // Assuming 'userId' is a unique identifier
            $table->string('userType')->default('student'); // Column for user type, defaulting to 'student'
            $table->string('profilePicture')->nullable(); // Column for the user's profile picture, nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }
};
