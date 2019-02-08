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
//Pemesanan
Route::get('pemesanan' , 'PemesananController@index');
Route::get('pemesanan/create','PemesananController@create')->name('pemesanan');
Route::post('pemesanan/store','PemesananController@store');
Route::get('pemesanan/show','PemesananController@show');
Route::get('pemesanan/edit/{id}','PemesananController@edit')->name('editpemesanan');
Route::post('pemesanan/update','PemesananController@update');
Route::get('pemesanan/destroy/{id}','PemesananController@destroy')->name('destroypemesanan');

//Penumpang
Route::get('penumpang' , 'PenumpangController@index');
Route::get('penumpang/create/{id}','PenumpangController@create')->name('penumpang');
Route::post('penumpang/store','PenumpangController@store');
Route::get('penumpang/show','PenumpangController@show');
Route::get('penumpang/edit/{id}','PenumpangController@edit')->name('editpenumpang');
Route::post('penumpang/update','PenumpangController@update');
Route::get('penumpang/destroy/{id}','PenumpangController@destroy')->name('destroypenumpang');

//Petugas
Route::get('petugas' , 'PetugasController@index');
Route::get('petugas/create/{id}','PetugasController@create')->name('petugas');
Route::post('petugas/store','PetugasController@store');
Route::get('petugas/show','PetugasController@show');
Route::get('petugas/edit/{id}','PetugasController@edit')->name('editpetugas');
Route::post('petugas/update','PetugasController@update');
Route::get('petugas/destroy/{id}','PetugasController@destroy')->name('destroypetugas');

//Rute
Route::get('rute' , 'RuteController@index');
Route::get('rute/create/{id}','RuteController@create')->name('rute');
Route::post('rute/store','RuteController@store');
Route::get('rute/show','RuteController@show');
Route::get('rute/edit/{id}','RuteController@edit')->name('editrute');
Route::post('rute/update','RuteController@update');
Route::get('rute/destroy/{id}','RuteController@destroy')->name('destroyrute');

//Tranportasi
Route::get('transportasi' , 'TransportasiController@index');
Route::get('transportasi/create/{id}','TransportasiController@create')->name('transportasi');
Route::post('transportasi/store','TransportasiController@store');
Route::get('transportasi/show','TransportasiController@show');
Route::get('transportasi/edit/{id}','TransportasiController@edit')->name('edittransportasi');
Route::post('transportasi/update','TransportasiController@update');
Route::get('transportasi/destroy/{id}','TransportasiController@destroy')->name('destroypetugas');