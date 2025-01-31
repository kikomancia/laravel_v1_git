<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentsController extends Controller
{
    //
    public function studentsFunction(){
        return view('studentsView') 
            ->with('title', 'If this show meaning its working!');
            
    }
}
