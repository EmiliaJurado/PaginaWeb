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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/uno', function () {
    return view('uno');
});
Route::get('/dos', function () {
    return view('dos');
});
Route::get('/tres', function () {
    return view('tres');
});
Route::get('/cuatro', function () {
    return view('cuatro');
});
Route::get('/cinco', function () {
    return view('cinco');
});
Route::get('/seis', function () {
    return view('seis');
});
Route::get('/siete', function () {
    return view('siete');
});
Route::get('/ocho', function () {
    return view('ocho');
});
Route::get('/nueve', function () {
    return view('nueve');
});


