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

Route::get('/my_page', function () {
    return '<h1>This is my page.</h1>';
});

Route::get('/page_centered', function () {
    return '<h1 style="text-align: center">This page is centered.</h1>';
});

Route::get('/my_hobby', function () {
    return '<h1>My hobby is development.</h1>';
});

Route::get('/my_language', function () {
    return '<h1>My favorite language of development is PHP.</h1>';
});
