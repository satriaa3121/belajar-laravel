<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', ['name' => 'Reyhan Satria' ,'role' => 'mandor ']);
});



// Route::get('/contact', function () {
//     return view('contact');
// });
