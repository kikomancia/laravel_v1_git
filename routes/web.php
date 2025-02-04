<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\emp_controller;
use App\Http\Controllers\employee_cont;
use App\Http\Controllers\employee_controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\UserController;
use App\Models\studentsModel;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function(){
//     return view('welcome');
// });

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

// throwing USER INPUTS FROM URL
// *NOTE same name with views filename
// userDataView - is the views filename
// show - is the function from the controller that is added

// Route::get('userDataView/{id}', [UserController::class, 'show']);

// //This where you wanted to redirect user if they are not authenticated or walang users account
// // add lang this ---  ->name('login') to direct here
// Route::get('/loginPage', [UserController::class, 'landingPageFunction'])->name('login');


//with authentication using middleware 
// every page must have middleware auth [->middleware('auth')]
// Route::get('userDataView/{id}', [UserController::class, 'show'])->middleware('auth');

///// LANDING PAGE IF NOT AUTHENTICATED
Route::get('/landingPage', [UserController::class, 'landingPageFunction'])->name('login');
//Route::get('/landingPage', [UserController::class, 'landingPageFunction']);

//// USING ARRAY METHOD ///
//Route::get('arrayMethod/{id}', [UserController::class, 'arrayFunction'])->middleware('auth');
Route::get('arrayMethod/{id}', [UserController::class, 'arrayFunction']);

//// USING WITH METHOD TO FETCH DATA FROM THE CONTROLLER /////
//Route::get('withMethod/{id}', [UserController::class, 'withFunction'])->middleware('auth');
Route::get('withMethod/{id}', [UserController::class, 'withFunction']);

//// USING MySQL METHOD TO FETCH DATA FROM THE CONTROLLER FROM DATABASE /////
Route::get('databaseMethod', [Controller::class, 'errorHandlingAuth']);
//Route::get('databaseMethod', [UserController::class, 'databaseFunction']);


//Route::get('/', [Controller::class, 'defaultPage']) -> middleware('auth');
Route::get('/', [Controller::class, 'defaultPage']);

// ///// normal fetching of data
 //Route::get('/students', [StudentController::class, 'index']);

///get ID in URL for where condition
Route::get('/students/{id}', [StudentController::class, 'fetchID']);