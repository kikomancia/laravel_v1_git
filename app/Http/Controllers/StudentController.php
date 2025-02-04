<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //$data = Students::where('age', '<=',19)->get();


        /////WITH ORDERING 
        // $data = Students::where('first_name', 'like', '%t%')
        //     ->orderBy('age', 'asc')->get();


        /////WITH LIMIT
        // $data = Students::where('first_name', 'like', '%%')
        //     ->orderBy('age', 'asc')->limit(5)->get();


        //////GROUP BY AND COUNTING
        $data = DB::table('students')->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();
        return \view('students.index', ['students' => $data]);
    }


    public function fetchID($id){

        // $data = Students::findOrfail($id);
        // //\dd( $data);

          ////specific fetching data
        $data = Students::where('age', $id)->get();

        return \view('students.index', ['students' => $data]);


    }
}
