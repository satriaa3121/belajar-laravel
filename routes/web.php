<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 9*8;
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact','contact',['name' => 'Reyhan Satria', 'phone' => 0101010101010]);

Route::redirect('/contact', '/contact-us');

Route::get('/product', function() {
    return 'product';
});

Route::get('/product/{id}',function($id){
    return view('product.detail', ['id' => $id]);
});