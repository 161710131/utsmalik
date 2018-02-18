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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('obat','obatcon');
Route::resource('tindakan','tindakancon');
Route::resource('pasien','pasiencon');
Route::resource('Bpjs','bpjscon');
Route::resource('dokter','doktercon');
Route::resource('registrasi','registrasicon');
Route::resource('rekamtindakan','rekamtindakancon');
Route::resource('pemberianobat','pemberianobatcon');
