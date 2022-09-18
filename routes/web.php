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

Route::get('/esal', function () {
    return view('pages.esal');
});

Route::get('/campanias', function () {
    return view('pages.campanias');
});

Route::get('/about', function () {
    return view('pages.quienes-somos');
});

Route::get('/wedo', function () {
    return view('pages.lo-que-hacemos');
});

Route::get('/apoyanos', function () {
    return view('pages.apoyanos');
});

Route::get('/contactanos', function () {
    return view('pages.contactanos');
});
