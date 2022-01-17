<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\pembeliancontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\logincontroller;
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

Route::get('/', [usercontroller::class, 'index']);

Route::get('/produk', [produkcontroller::class, 'index']);

Route::get('/pembelian', [pembeliancontroller::class, 'index']);

Route::post('/simpan-user', [usercontroller::class, 'simpan']);

Route::post('/simpan-produk', [produkcontroller::class, 'simpan']);

Route::get('/dashboard', [dashboardcontroller::class, 'index']);

Route::get('/login', [logincontroller::class, 'index']);
