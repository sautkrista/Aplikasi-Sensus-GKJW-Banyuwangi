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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data_warga', [App\Http\Controllers\WargaController::class, 'index'])->name('data_warga');
Route::get('/data_pelayan', [App\Http\Controllers\PelayanController::class, 'index'])->name('data_pelayan');
Route::get('/warta', [App\Http\Controllers\WartaJemaatController::class, 'index'])->name('warta');
Route::get('/sensus_warga', [App\Http\Controllers\SensusController::class, 'index'])->name('sensus_warga');
