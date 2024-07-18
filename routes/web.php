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

Route::prefix('/admin')->group(function() {
    Route::get('/profile-admin', function() {
        return 'Profile Admin';
    });

    Route::get('/contact-admin', function() {
        return 'Contact Admin';
    });

    Route::get('/about-admin', function() {
        return 'About Admin';
    });

    Route::get('/profile-admin2', function() {
        return 'Profile Admin';
    });

    Route::get('/contact-admin2', function() {
        return 'Contact Admin';
    });

    Route::get('/about-admin2', function() {
        return 'About Admin';
    });
});
