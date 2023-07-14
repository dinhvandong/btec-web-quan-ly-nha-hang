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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/login-api', function () {
    return view('welcome');
});
Route::get('/login-dontabc', function () {
    return view('welcome');
});

Route::get('/search-student-by-name', function () {
    return view('welcome');
});
Route::get('/get-list-products', function () {
    return view('welcome');
});

Route::get('/sign-in', function () {
    return view('welcome');
});

