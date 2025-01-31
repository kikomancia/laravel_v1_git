<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'default text!';
    }


    public function landingPageFunction()
    {
        //landingPage is the landing page hehe if not authenticated
        return view('landingPage')
            ->with('message', 'If this page show meaning data authentication is on.');

        // return view('landingPage');
    }

    // ARRAY MEHTOD
    public function arrayFunction($id)
    {

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
    public function withFunction($id)
    {

        return view('withMethod')
            ->with('id', $id)
            ->with('title', 'with() method')
            ->with('name', 'Kikomans')
            ->with('age', '25')
            ->with('address', 'muntinlupa city')
            ->with('email', 'Kikomans@gmail.com');
    }



    // using MySQL data fetching
    public function databaseFunction()
    {
        return view('databaseMethod')
                -> with('message', 'Hello from the other side!');
    }

}