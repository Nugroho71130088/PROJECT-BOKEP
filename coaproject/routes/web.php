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
    return view('dashboard');
});


Route::get('tambahkode', function () {
 	return view('tambahkode');
});

    //route menampilkan data ke view
Route::get('/pegawai','PegawaiController@index');

//route menambahkan data kegiatan
Route::get('/pegawai/tambah','PegawaiController@tambah');
//metode POST memasukan data kedalam database
Route::post('/pegawai/store','PegawaiController@store');