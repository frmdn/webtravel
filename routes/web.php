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
    return view('pages.index');
});

Route::get('/destination', function () {
    return view('pages.destination');
});

Route::get('/tour', function () {
    return view('pages.tour');
});

Route::get('/form', function () {
    return view('pages.form');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/travel', 'MainController@country');
Route::get('/travel/{country}', 'MainController@city');
Route::get('/travel/city/{id}', 'MainController@place');

Route::get('/agency','AgencyController@index');
Route::get('/agency/{id}','AgencyController@show');