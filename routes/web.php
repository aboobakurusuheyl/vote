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

Route::get('/mqa', function () {
    return view('page.maq');
});


Route::get('/mnqf', function () {
    return view('page.mnqf');
});

Route::get('/approved-institutions', function () {
    return view('page.approved-institutions');
});
