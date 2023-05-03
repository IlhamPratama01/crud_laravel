<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KependudukanController;

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

Route::get('/index', [KependudukanController::class,'index']);

Route::get('/kependudukan', [KependudukanController::class,'tampil']);

Route::get('/tambah', [KependudukanController::class,'tambah']);

Route::post('/kependudukan/store', [KependudukanController::class,'simpan']);

Route::get('/kependudukan/ubah/{nik}', [KependudukanController::class,'ubah']);

Route::post('/kependudukan/edit', [KependudukanController::class,'edit']);

Route::get('/hapus/{nim}',[KependudukanController::class,'hapus']);

Route::get('/kependudukan/cetak_pdf',[KependudukanController::class,'cetak_pdf']);

Route::get('/kependudukan/export_excel',[KependudukanController::class,'export_excel']);
