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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/reg', function () {
    return view('reg');
});

Route::get('/save', function () {
    return view('savings');
});

Route::get('/loans', function () {
    return view('loans');
});

Route::get('/dividends', function () {
    return view('dividends');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
