<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('blog/{post}', [UserController::class, 'index'])->name('user.index');
Route::get('/', 'PageController@posts')->name('homeposts');
Route::get('blog/{post}', 'PageController@post')->name('post');

Auth::routes();

Route::resource('posts','Backend\PostController')
->middleware('auth')
->except('show');



Route::get('/home', 'HomeController@index')->name('home');
