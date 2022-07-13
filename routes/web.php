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
    return view('regist');
});

Route::get('/regist1', function () {
    return view('regist1');
});

Route::get('/regist2', function () {
    return view('regist2');
});

Route::get('/regist3', function () {
    return view('regist3');
});