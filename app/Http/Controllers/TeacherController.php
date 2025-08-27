<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function Teacherregisartionpage(){
        return view('teachers/teachersignup');
    }
     public function Teacherloginpage(){
        return view('teachers/welcome');
    }
    public function Teacherregister(Request $request){
        // dd($request->all());
        // echo "Working";
    }
    public function Teacherlogin(){

    }
}