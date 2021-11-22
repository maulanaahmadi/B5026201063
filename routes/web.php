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


