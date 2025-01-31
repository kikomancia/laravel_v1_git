<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello if this show, then goods!';
    }


    public function loginCont(){
        // return 'Hello welcom to login page!';

        $loginData = array(

            "name"      => "Welcome back!",
            "remind"    => "Forgot password?"
        );

        return view('loginPage', $loginData);
    }


    // //data from url
    // public function show($id){
    //     return $id;
    // }




    // ARRAY MEHTOD
    public function arrayFunction($id){

        $usersArray = array(
            "id"        => $id,
            "title"     => "Using array method",
            "name"      => "kiko mancia",
            "age"       => 31,
            "address"   => "231 Bayanan Muntinlupa City",
            "email"     => "kikomans@kiko.com",
        );

        //// FETCHING AND DISPLAYING DATA INSIDE CONTROLLER
        //return view('userDataView', ['usersData' => $usersData]);

        return view('arrayMethod',  $usersArray);
    }


    //using -> with method to display data
    public function withFunction($id){

        return view('withMethod')
                -> with('id', $id)
                -> with('title', 'with() method')
                -> with('name', 'Kikomans')
                -> with('age', '25')
                -> with('address', 'muntinlupa city')
                -> with('email', 'Kikomans@gmail.com');

    }
}
