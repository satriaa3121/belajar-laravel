<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        'name' => 'Reyhan Satria',
        'role' => 'mandor',
        'buah' => ['pisang', 'durian', 'manggis', 'alpukat', 'kiwi' ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});




// Route::get('/contact', function () {
//     return view('contact');
// });
