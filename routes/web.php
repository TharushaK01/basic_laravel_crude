<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

//get route example
Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
//post.something it can route to any controller method
Route::resource('posts', PostController::class);

//post route example
Route::post("/formsubmited", function (Request $request) {

    $request->validate([
        'fullname' => 'required|min:5|max:10',
        'email' => 'required|email',
    ]);
    $fullname = $request->input('fullname');
    $email = $request->input('email');

    return "form full name is {$request-> input('fullname')}, and email is $email";
})->name("formsubmited");