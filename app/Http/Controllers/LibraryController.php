<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LibraryController extends Controller
{
    public function library(){
        return view('Library/welcome');
    }
    public function portal(){
        return view('Library/lpanel');
    }
    public function feedback(){
        return view('Library/officialreview');
    }
    public function libraryLogin(Request $request){
        // echo "Library Login Function Called";

          $name = $request->input('name');
          $password = $request->input('password');

          if (DB::table('staff')->where('name',$name)->where('password',$password)->exists()) {
              $data=DB::table('staff')->where('name',$name)->first();
              session(['staff'=>$data->name]);
              return view('Library/lpanel',['staff'=>$data->name])->with('success', 'Login successful');
          } else {
              return redirect()->back()->withErrors(['message' => 'Invalid name or password']);
          }

    }
    public function libraryLogout(Request $request){
          // Check if the 'staff' session key exists.

if($request->session()->has('staff')){
    // clear all session data for the current session
    $request->session()->flush();
    return redirect('library')->with('success','Logout Done');
}

    }
}