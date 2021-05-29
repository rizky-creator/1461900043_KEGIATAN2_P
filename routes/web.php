<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;

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
Route::get('/petugas',[datacontroller::class,'index']);
Route::get('/petugas/cari', [datacontroller::class, 'cari']);
Route::get('/petugas/lain',[datacontroller::class,'join']);
Route::get('/petugas/iya',[datacontroller::class,'masuk']);