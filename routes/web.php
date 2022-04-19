<?php

use App\Http\Controllers\BuahController;
use App\Http\Controllers\PelangganController;
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
//     return view('index');
// });

// Route::get('/', function () {
//     return view('datapelanggan.index', );
// });

Route::Post('/simpan',[
    PelangganController::class,'store'
]); // untuk menyimpan data

Route::get('/laporans/create', [
    PelangganController::class, 'create'
]); //membuat data
Route::get('/', [
    PelangganController::class, 'index'
]);//index


Route::resource('laporans', PelangganController::class);

