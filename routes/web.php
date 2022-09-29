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
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/logo', function () {
    return view('details/logo');
});
Route::get('/frontend', function () {
    return view('details/frontend');
});
Route::get('/mockup', function () {
    return view('details/mockup');
});
Route::get('/backend', function () {
    return view('details/backend');
});
Route::get('/design', function () {
    return view('details/design');
});
