<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BookUpload;

class LibraryController extends Controller
{
    public function library(){
        return view('Library/welcome');
    }
    public function Book(){
    return view('Library/uploadbooks');
    }
    public function portal(){
        return view('Library/lpanel');
    }
    public function feedback(){
        return view('Library/officialreview');
    }
    // public function libraryLogin(Request $request){
    //     // echo "Library Login Function Called";

    //       $name = $request->input('name');
    //       $password = $request->input('password');

    //       if (DB::table('staff')->where('name',$name)->where('password',$password)->exists()) {
    //           $data=DB::table('staff')->where('name',$name)->first();
    //        session(['stafff'=>$data]);

    //       return redirect()->route('libraryportal')
    //              ->with('success', 'Login successful');
    //       } else {
    //           return redirect()->back()->withErrors(['message' => 'Invalid name or password']);
    //       }

    // }
    public function libraryLogin(Request $request)
{
    $name = $request->input('name');
    $password = $request->input('password');

    // Check empty fields
    if (empty($name) || empty($password)) {
        return redirect()->back()
                         ->with('error', 'Name and password are required');
    }

    // Fetch staff from database
    $data = DB::table('staff')
              ->where('name', $name)
              ->first();

    // Validate user
    if (!$data || $data->password !== $password) {
        return redirect()->back()
                         ->withErrors(['message' => 'Invalid name or password']);
    }

    // Store full object in session
    session(['staff' => $data]);

    // Return view exactly like student login
    return view('Library/lpanel',['staff'=>$data->name])->with('success', 'Login successful');
}
    public function libraryLogout(Request $request){
          // Check if the 'staff' session key exists.

if($request->session()->has('staff')){
    // clear all session data for the current session
    $request->session()->flush();
    return redirect('library')->with('success','Logout Done');
}

    }
// from here we will upload the books dynamically
    public function Books(Request $request){
        // dd(ini_get('upload_max_filesize'), ini_get('post_max_size'));
$request->validate([
        'book' => 'required|mimes:pdf|max:409600',
        'img' => 'required|image|max:20480'
    ]);
    //  Help of this code we are checking the size of image and book;
    //    dd($request->all());
// For upload image
    $imgName = null;
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $extension = $file->getClientOriginalExtension(); // Use getClientOriginalExtension for a cleaner name
        $imgName = time() . '.' . $extension;
        $file->move(public_path('upload/Bookwithimage'), $imgName);
        }
        else{
            return redirect()->back()->with('error', 'Profile picture is required');
            }
            // For pdf file
            // dd($request->all(), $request->hasFile('book'));
 $bookName = null;
    if ($request->hasFile('book')) {
        $file = $request->file('book');
        $extension = $file->getClientOriginalExtension(); // Use getClientOriginalExtension for a cleaner name
        $bookName = time() . '.' . $extension;
        $file->move(public_path('upload/Bookwithimage'), $bookName);
        }
        else{
            return redirect()->back()->with('error', 'book is required');
            }

            // First create a object with the help of model
    $books = new BookUpload();
    $books->title = $request['bookname'];
    $books->author = $request['Author'];
    $books->description = $request['Description'];
    $books->cover_image = $imgName; // Asign the imgname
    $books->pdf_file = $bookName;
    $books->category = $request['category'];


// Check
if ($books->save()) {
    return redirect()->route('libraryportal')->with('success', 'Book uploaded successfully');
} else {
    return response()->json(['message' => 'Book Upload failed'], 500);
}

    }

// Retrive Books from database

public function getbook(){

$allbooks = BookUpload::all();
// dd($allbooks);
return view('student/studentlibrary',compact('allbooks'));

}



public function delete($id){
    // dd($id);

$book = BookUpload::find($id);

// If book is exsit in DB

if($book){
    // delete files from folder
    $coverpath = (public_path('upload/Bookwithimage/'.$book->cover_image));
    $pdfpath = (public_path('upload/Bookwithimage/'.$book->pdf_file));
    if(file_exists($coverpath)){
        unlink ($coverpath);
        }
        if(file_exists($pdfpath)){
    unlink ($pdfpath);
}
    $book->delete();

    return redirect()->back()->with('Sucess','Book Delete sucessfully');
}

}
//  This function is showing all books on Library Update Portal
public function updatebooks(){
    //  Here we are getting all data from this table with the help of Model
    // And pass to this page
$allbook = BookUpload::all();
    return view('Library/bookoperation',compact('allbook'));
}


public function update($id){
    // Check that id is exist in DB or not.

    // dd($id);
    // find the book first in database.
$book = BookUpload::find($id);
if($book){
    return view('Library/update',compact('book'));
}

}

// This function is actually update the books
public function booksupdate(Request $request, $id)
{
    $book = BookUpload::findOrFail($id);
    // dd($request->hasFile('book'), $request->file('book'));

    // IMAGE UPDATE
    if ($request->hasFile('img')) {

        // delete old image
        $oldImage = public_path('upload/Bookwithimage/'.$book->cover_image);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }

        $file = $request->file('img');
        $imgName = time().'_img.'.$file->getClientOriginalExtension();
        $file->move(public_path('upload/Bookwithimage'), $imgName);

        $book->cover_image = $imgName;
    }

    // PDF UPDATE
    if ($request->hasFile('book')) {
        $oldPdf = public_path('upload/Bookwithimage/'.$book->pdf_file);
        if (file_exists($oldPdf)) {
            unlink($oldPdf);
        }

        $file = $request->file('book');
        $bookName = time().'_pdf.'.$file->getClientOriginalExtension();
        $file->move(public_path('upload/Bookwithimage'), $bookName);

        $book->pdf_file = $bookName;
    }

    // Update text fields
    $book->title = $request->bookname;
    $book->author = $request->Author;
    $book->description = $request->Description;
    $book->category = $request->category;

    $book->save();

    return redirect()->route('libraryportal')
                     ->with('success', 'Book updated successfully');
}

// public function booksupdate(Request $request, $id)
// {
//     // dd($request->hasFile('book'), $request->file('book'));
// //     dd(
// //     ini_get('upload_max_filesize'),
// //     ini_get('post_max_size'),
// //     $_SERVER['CONTENT_LENGTH']
// // );
//     $book = BookUpload::findOrFail($id);
//     $request->validate([
//         'bookname' => 'required',
//         'Author' => 'required',
//         'Description' => 'required',
//         'category' => 'required',
//         'book' => 'nullable|mimes:pdf|max:409600',
//     ]);

//     if ($request->hasFile('book')) {

//         $pdfFile = time().'_'.$request->file('book')->getClientOriginalName();

//         $request->file('book')->move(
//             public_path('upload/Bookwithimage'),
//             $pdfFile
//         );

//         $book->pdf_file = $pdfFile;
//     }

//     $book->title = $request->bookname;
//     $book->author = $request->Author;
//     $book->description = $request->Description;
//     $book->category = $request->category;

//     $book->save();

//     return redirect()->back()->with('success', 'Updated Successfully');
// }
}
