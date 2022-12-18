<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;

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

Route::get('/', [barangController::class, 'getAllBarang']);
Route::post('/add', [barangController::class, 'createBarang']);
Route::get('/edit/{id}', [barangController::class, 'editBarang']);
Route::post('/update/{id}', [barangController::class, 'updateBarang']);
Route::get('/add-form', [barangController::class, 'showAddForm']);
Route::get('/delete/{id}', [barangController::class, 'deleteBarang']);
Route::get('/cek-ongkir/{id}', [barangController::class, 'cekOngkir']);
