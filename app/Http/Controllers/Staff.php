<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Staff extends Controller
{
    public function staffloginpage(){
        return view('staff/loginstaff');
    }
    public function staffregisterpage(){
        return view('staff/members');
    }
    public function createmember(Request $request){

        dd($request->all());
    
    }
}