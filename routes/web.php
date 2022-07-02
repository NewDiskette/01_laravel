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

Route::get('/my_page', 'MyPageController@index');

Route::get('/page_centered', 'PageCenteredController@index');

Route::get('/my_hobby', 'MyHobbyController@index');

Route::get('/my_language', 'MyLanguageController@index');

Route::get('/posts', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/update', 'PostController@update');

Route::get('/posts/delete', 'PostController@delete');

Route::get('/posts/restore', 'PostController@restore');

Route::get('/posts/first_or_create', 'PostController@firstOrCreate');

Route::get('/posts/update_or_create', 'PostController@updateOrCreate');

Route::get('/posts/example', 'PostController@example');
