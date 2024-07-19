<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// !!cara mengambil data controller dari database
// eloquent orm (rekomendasi laravel)
// query buuilder (ini masih oke)
//raw query (tidak rekomendasi rawan terjadi sql injection

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all(); 
        return view('student', ['studentList' => $student]);
    }
}
