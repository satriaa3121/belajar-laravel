<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $student = Student::all(); 
        // return view('student', ['studentList' => $student]);

       $nilai = [9, 8, 7, 4, 5, 6, 7, 10,3, 4, 7];

    //  **** manual

    //    $countNilai = count($nilai);
    //    $totalNilai = array_sum($nilai);
    //    $nilaiRataRata = $totalNilai / $countNilai;


    //    dd($nilaiRataRata);

    //***** collection
    // $nilaiRataRata = collect($nilai)->avg();

    // dd($nilaiRataRata);


    // ***** contains = apakah sebuah array memiliki sesuatu
    // $aaa = collect($nilai)->contains(function ($value) {
    //     return $value < 6;
    // });

    // dd($aaa);
    
    // ***** diff mendapatkan data untuk membandingkan cnth array dan array b
    
    // $restaurantA = ["burger", "siomay", "pizza", "spaghetti", "makaroni", "martabak", "bakso"];
    // $restaurantB = ["pizza", "fried chiken", "martabak", "tumis kangkung", "pecel lele", "ca kangkung", "bakso"];

    // $menuRestoA = collect($restaurantA)->diff($restaurantB);
    // $menuRestoB = collect($restaurantB)->diff($restaurantA);
    // dd($menuRestoB);

    // ***** method filter

    // $aaa = collect($nilai)->filter(function ($value) {
    //     return $value > 7;
    // })->all();

    // dd($aaa);


    // metode pluck ambil salah satu item

    // $biodata = [
    //     ['nama' => 'Jaty', 'umur' => 16],
    //     ['nama' => 'tomy', 'umur' => 17],
    //     ['nama' => 'depin', 'umur' => 19],
    //     ['nama' => 'dasi', 'umur' => 22],
    // ];

    // $aaa = collect($biodata)->pluck('nama');

    // dd($aaa);

    // metode map (perulangan)
    // mencari tau hasil dari nilai dikali 2 dari data2 yang ada di array $nilai



    $aaa = collect($nilai)->map(function ($value) {
        return $value * 2;
    });

    dd($aaa); 
}
    

}
