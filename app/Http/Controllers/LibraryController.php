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
}
