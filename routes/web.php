<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// different type of routes
// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();
// Route::match();
// Roote::any();

//resources/views/about or any pages
// Route::get('/', function () {
//     return view('about');
// });

// Route::view('/', 'about');

Route::any('/', function(){
    return 'about';
});

// Route::get('/', function(){
//     return 'redirected';
// });

// Route::redirect('/welcome', '/');
