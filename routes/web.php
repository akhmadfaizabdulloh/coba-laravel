<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return 'Hello WPU!';
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Halaman Home';
// });

// Route::get('/about', function () {
//     return 'Halaman About';
// });

// Route::get('/blog', function () {
//     return 'Halaman Blog';
// });


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Akhmad Faiz Abdulloh",
        "email" => "akhmadfaizabdulloh@gmail.com",
        "image" => "cute.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});