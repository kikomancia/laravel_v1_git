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


    //dummy data using array[]
    public function show($id){

        $usersData = array(
            "id"        => $id,
            "name"      => "kiko mancia",
            "age"       => 31,
            "address"   => "231 Bayanan Muntinlupa City",
            "email"     => "kokomonrado@gmail.com",
            "contact" => "09101012655"
        );

        //// FETCHING AND DISPLAYING DATA INSIDE CONTROLLER
        //return view('userDataView', ['usersData' => $usersData]);

        //// FETCHING AND DISPLAYING DATA FROM DATABASE
        return view('userDataView',  $usersData);
    }


    public function showUsingWith($id){

        return view('userDataView')
                -> with('name', 'Kikomans')
                -> with('age', 'Kikomans')
                -> with('address', 'muntinlupa')
                -> with('email', 'Kikomans@gmail.com')
                -> with('contact', '0910101226454');

    }
}
