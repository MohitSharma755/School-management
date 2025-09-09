<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        echo "Library Login Function Called";

        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        // ]);
        // Authentication logic here

        // return redirect()->route('library.portal');
    }
}
