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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'App\Http\Controllers\KependudukanController@index');

Route::get('/kependudukan', 'App\Http\Controllers\KependudukanController@tampil');

Route::get('/tambah', 'App\Http\Controllers\KependudukanController@tambah');

Route::post('/kependudukan/store', 'App\Http\Controllers\KependudukanController@simpan');

Route::get('/kependudukan/ubah/{nik}', 'App\Http\Controllers\KependudukanController@ubah');

Route::post('/kependudukan/edit', 'App\Http\Controllers\KependudukanController@edit');

Route::get('/hapus/{nim}','App\Http\Controllers\KependudukanController@hapus');

Route::get('/kependudukan/cetak_pdf','App\Http\Controllers\KependudukanController@cetak_pdf');

Route::get('/kependudukan/export_excel','App\Http\Controllers\KependudukanController@export_excel');
