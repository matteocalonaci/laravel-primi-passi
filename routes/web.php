<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
  $data = [
    "titolo"=>"WELCOME LARAVEL WORLD"
  ];
    return view('welcome', $data);
});

Route::get('/about', function () {
    $data = [
        "titolo"=>"WELCOME ALTRO BLADE"
      ];
        return view('altro', $data);
  });

