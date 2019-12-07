<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::resource('candidat','CandidatController');
Route::resource('inscription','SecurityController');
=======

Route::resource('Recruteur','RecruteurController');

Route::resource('Administrateur','AdministrateurController');

Route::resource('candidat','CandidatController');

>>>>>>> 0adbaaca626a2e5cdd46c41d5c71bbf945925d08
