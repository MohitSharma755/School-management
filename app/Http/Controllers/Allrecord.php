<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Allrecord extends Controller
{
    public function student(){
        return view('records/viewstudent');
    }

     public function faculty(){
        return view('records/viewfaculty');
    }
    public function teacher(){
        return view('records/viewteachers');
    }
}
