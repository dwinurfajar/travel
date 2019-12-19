<?php

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



// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/daftar', function () {
//     return view('daftar');
// });


Route::get('/', 'PageController@index');

Route::get('/login', 'PageLogin@login');

Route::get('/daftar', 'PageDaftar@index');
Route::get('/daftar', 'PageDaftar@create');
Route::post('/daftar', "PageDaftar@store");