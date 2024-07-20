<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExtracurricularController;

Route::get('/home', function () {
    return view('home', [
        'name' => 'Reyhan Satria',
        'role' => 'mandor',
        'buah' => ['pisang', 'durian', 'manggis', 'alpukat', 'kiwi' ]
    ]);
});

Route::get('/students',[StudentController::class, 'index']);
Route::get('/class',[ClassController::class, 'index']);
Route::get('/extracurricular',[ExtracurricularController::class, 'index']);


// Route::get('/contact', function () {
//     return view('contact');
// });
