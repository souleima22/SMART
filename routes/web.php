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
    return view('welcome');
});
Route::resource('offre','OffreController');
Route::resource('candidat','CandidatController');
Route::get('/search','CandidatController@search');
Route::resource('admin','AdministrateurController');
Route::get('/home','HomeController@index')->name('Home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
