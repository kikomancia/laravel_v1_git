<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {

        ///// get all column on the database using all();
        // $data = Students::all();
        // return \view('students.index', ['students' => $data]);


        // ////specific fetching data
        // $data = Students::where('first_name', 'Clementine')->get();
        // return \view('students.index', ['students' => $data]);


        ////wild card - all name with bert or any like
        //$data = Students::where('first_name', 'like','%bert%')->get();

        $data = Students::where('age', '<=',19)->get();


        return \view('students.index', ['students' => $data]);
    }
}
