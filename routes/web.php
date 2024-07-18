<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', [
        'name' => 'Reyhan Satria',
        'role' => 'mandor',
        'buah' => ['pisang', 'durian', 'manggis', 'alpukat', 'kiwi' ]
    ]);
});





// Route::get('/contact', function () {
//     return view('contact');
// });
