<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookUpload extends Model
{
    // Upload book and cover image from this code

    protected $table = "book_uploads";
 protected $primaryKey = "id";
protected $fillable =[
       // Add this before creating the object

    'title' => 'required|string|max:255',
    'author' => 'required|email',
    'description' => 'required|min:6',
    'cover_image' => 'required|string',

    'pdf_file' => 'required|string|max:15',
    'category' => 'required|string|max:15',

];


}
