<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function index()
    {
       $ekskul = Extracurricular::with('students')->get();
       return view('Extracurricular', ['ekskulList' => $ekskul]);
    }
}
