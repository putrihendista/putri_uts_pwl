<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BarangController;

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

Route::get('/', [BarangController::class, 'viewBarang']);
Route::get('/detailBarang/{id}', [BarangController::class, 'detailBarang'])->name('detail');