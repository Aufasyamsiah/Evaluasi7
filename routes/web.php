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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/mahasiswa/create', 'MahasiswaController@create');

Route::get('/mahasiswa/{mahasiswa}', 'MahasiswaController@show');

Route::post('/mahasiswa', 'MahasiswaController@store');

Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy');

Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit');

Route::patch('/mahasiswa/{mahasiswa}', 'MahasiswaController@update');
