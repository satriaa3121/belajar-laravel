<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::with(['class', 'extracurriculars'])->get(); 
        return view('student', ['studentList' => $student]);

}
    

}
