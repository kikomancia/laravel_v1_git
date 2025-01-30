<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello if this show, then goods!';
    }

    // //data from url
    // public function show($id){
    //     return $id;
    // }


    //dummy data using array[]
    public function show($id){

        $usersData = array(
            "id" => $id,
            "name" => "kiko mancia",
            "age" => 31,
            "address" => "231 Bayanan Muntinlupa City"
        );

        return view('userDataView', ['usersData' => $usersData]);
    }
}
