<?php

use App\Http\Controllers\produkController;
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
//     return view('welcome');
// });


Route::get('/', [produkController::class, 'index']);
Route::get('/tambahProduk',[produkController::class, 'storePage']);
Route::post('/produk/tambah',[produkController::class, 'store']);
Route::get('/produk/edit/{id}',[produkController::class, 'editPage']);
Route::put('/produk/update/{id}', [produkController::class, 'updateStore']);
Route::get('/produk/delete/{id}', [produkController::class, 'deleteProduk']);