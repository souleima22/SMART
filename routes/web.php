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
<<<<<<< HEAD
Route::resource('candidat','CandidatController');
Route::get('/search','CandidatController@search');
Route::resource('recruteur','RecruteurController');
Route::resource('admin','AdministrateurController');
Route::get('/search','RecruteurController@search');

=======
<<<<<<< HEAD
Route::resource('candidat','CandidatController');
Route::get('/search','CandidatController@search');
Route::resource('admin','AdministrateurController');
Route::get('/home','HomeController@index')->name('Home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/search','OffreController@search');
Route::resource('Recruteur','RecruteurController');
Route::resource('candidat','CandidatController');
Route::resource('admin','AdministrateurController');
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
