<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom ;

class ClassController extends Controller
{
    public function index()
    {

        //lazy load 
        $class = ClassRoom::all(); //klo butuh baru request data  
        //eager load
        // $class = ClassRoom::with('students')->get(); 
        return view('classroom', ['classList' => $class]);
    }
}
