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
    return view('index');
});
Route::get('/voituresport', function () {
    return view('voituresport');
});
Route::get('/voitureluxe', function () {
    return view('voitureluxe');
});


Route::get('/voitureconomique', function () {
    return view('voitureeconomie');
});
Route::get('/voituresuv', function () {
    return view('voituresuv');
});
Route::get('/voituredecapo', function () {
    return view('voituredecapo');
});
Route::get('/activite', function () {
    return view('activite');
});

Route::get('/yacht', function () {
    return view('yacht');
});

Route::get('/quad', function () {
    return view('quad');
});

Route::get('/jetski', function () {
    return view('jetski');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/helico', function () {
    return view('helico');
});
Route::get('/galerie', function () {
    return view('galerie');
});
