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
Route::get('/maulanaahmadi_ppraktikum1', function () {
    return view('prak1web');
});
Route::get('/maulanaahmadi_tugas4', function () {
    return view('tugas4web');
});

Route::get('prak2web', 'ViewController@showPraktikum2');

Route::get('ets1', 'ViewController@showETS');

Route::get('tugasphp', 'ViewController@showtugasphp1');

Route::post('tugasphpdua', 'ViewController@showtugasphp2');

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//route CRUD
Route::get('/pendapatan','PendapatanController@index');

Route::get('/pendapatan/tambah','PendapatanController@tambah');

Route::post('/pendapaatan/store','PegawaiController@store');


