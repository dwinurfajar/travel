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

//Route::get('/login', 'PageLogin@login');

Route::get('/pemesanan', 'PemesananController@create');
Route::post('/pemesanan/store', 'PemesananController@store');

Route::get('/detail', 'PemesananController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
