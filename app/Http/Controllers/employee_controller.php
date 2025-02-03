<?php

namespace App\Http\Controllers;

use App\Models\employee_model;
use Illuminate\Http\Request;

class employee_controller extends Controller
{
    //
    public function empFunctions(){

       //  $empData = tbl_employees_data::all();

        //dd($empData);

        return \view('employee.index');
    }
}
