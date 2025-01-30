<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

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

// Route::any('/', function(){
//     return 'about';
// });

Route::get('/', function(){
    return view('welcome');
});

// Route::get('/get-text', function(){
//     return response('Hello kikomans!', 200)
//              ->header('content-Type', 'text/plain');
// });

Route::get('/user/{id}', function($id){
    return response($id, 200);
});

//json attack
Route::get('/jsonResponse', function(){
    return response()->json(['name' => 'Kikomans', 'age' => '22']);
});


//data or function from the controller 
Route::get('/users', [UserController::class, 'index']);


//trowing USER INPUTS FROM URL
Route::get('user/{id}', [UserController::class, 'show']);
