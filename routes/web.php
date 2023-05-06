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
Route::get('/bebidas', function () {
    return view('bebidas');
});
Route::get('/postres', function () {
    return view('postres');
});
Route::get('/especiales', function () {
    return view('especiales');
});
Route::get('/contactanos', function () {
    return view('contactanos');
});
