<?php

use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Staff\PelayanController;
use App\Http\Controllers\Staff\PeriodeController;
use App\Http\Controllers\Staff\QuisionerController;
use App\Http\Controllers\Staff\SensusController;
use App\Http\Controllers\Staff\WargaController;
use App\Http\Controllers\Staff\WartaController;
use App\Models\Warga;
use App\Models\Pelayan;
use App\Models\WartaJemaat;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('guest.home');
})->name('home');

Route::get('/warga', function () {
    $data = Warga::with('krw')->get();
    return view("guest.data_warga", compact('data'));
})->name('warga');

Route::get('/pelayan', function () {
    $data = Pelayan::all();
    return view("guest.data_pelayan", compact('data'));
})->name('pelayan');

Route::get('/warta', [App\Http\Controllers\WartaJemaatController::class, 'index'])->name('warta');
Route::post('/warta/show', [App\Http\Controllers\WartaJemaatController::class, 'show'])->name('show_warta');
Route::get('/sensus_warga', [App\Http\Controllers\SensusController::class, 'index'])->name('sensus_warga');
Route::post('/sensus_warga/create', [App\Http\Controllers\SensusController::class, 'create'])->name('create_sensus_warga');
Route::post('/sensus_warga', [App\Http\Controllers\SensusController::class, 'store'])->name('store_sensus_warga');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('pengguna', PenggunaController::class);
    Route::resource('data-warga', WargaController::class);
    Route::resource('data-pelayan', PelayanController::class);
    Route::resource('data-warta', WartaController::class);
    Route::resource('periode', PeriodeController::class);
    Route::resource('quisioner', QuisionerController::class);
    Route::resource('sensus', SensusController::class);
});
