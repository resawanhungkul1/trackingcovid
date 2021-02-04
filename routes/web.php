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
Route::get('/i', function(){
    return view('layouts.master');
});
Route::get('/index', function(){
    return view('admin.dashboard.index');
});
// Route::get('/provinsi', function(){
//     return view('admin.provinsi.index');
// });
Route::get('/kota',function(){
    return view('admin.kota.index');
});
Route::get('/kecamatan',function(){
    return view('admin.kecamatan.index');
});
Route::get('/kelurahan',function(){
    return view('admin.kelurahan.index');
});
Route::get('/rw',function(){
    return view('admin.rw.index');
});
Route::get('/laporan',function(){
    return view('admin.laporan.index');
});
//provinsi
Route::get('/provinsi', [App\Http\Controllers\ProvinsiController::class, 'index'])->name('provinsi');
Route::get('/provinsi_create', [App\Http\Controllers\ProvinsiController::class, 'create'])->name('provinsi-create');
Route::post('/provinsi-store', [App\Http\Controllers\ProvinsiController::class, 'store'])->name('provinsi-store');
Route::get('/provinsi/show/{id}', [App\Http\Controllers\ProvinsiController::class, 'show'])->name('provinsi-show');
Route::get('/provinsi/edit/{id}', [App\Http\Controllers\ProvinsiController::class, 'edit'])->name('provinsi-edit');
Route::put('/provinsi-update/{id}', [App\Http\Controllers\ProvinsiController::class, 'update'])->name('provinsi-update');
Route::get('/provinsi-delete/{id}', [App\Http\Controllers\ProvinsiController::class, 'destroy'])->name('provinsi-delete');

//kota
Route::get('/kota', [App\Http\Controllers\KotaController::class, 'index'])->name('kota');
Route::get('/kota-create', [App\Http\Controllers\KotaController::class, 'create'])->name('kota-create');
Route::post('/kota-store', [App\Http\Controllers\KotaController::class, 'store'])->name('kota-store');
Route::get('/kota/edit/{id}', [App\Http\Controllers\KotaController::class, 'edit'])->name('kota-edit');
Route::put('/kota-update/{id}', [App\Http\Controllers\KotaController::class, 'update'])->name('kota-update');
Route::get('/kota-delete/{id}', [App\Http\Controllers\KotaController::class, 'destroy'])->name('kota-delete');

//Kecamatan
Route::get('/kecamatan', [App\Http\Controllers\KecamatanController::class, 'index'])->name('kecamatan');
Route::get('/kecamatan-create', [App\Http\Controllers\KecamatanController::class, 'create'])->name('kecamatan-create');
Route::post('/kecamatan-store', [App\Http\Controllers\KecamatanController::class, 'store'])->name('kecamatan-store');
Route::get('/kecamatan/edit/{id}', [App\Http\Controllers\KecamatanController::class, 'edit'])->name('kecamatan-edit');
Route::put('/kecamatan-update/{id}', [App\Http\Controllers\KecamatanController::class, 'update'])->name('kecamatan-update');
Route::get('/kecamatan-delete/{id}', [App\Http\Controllers\KecamatanController::class, 'destroy'])->name('kecamatan-delete');

//kelurahan
Route::get('/kelurahan', [App\Http\Controllers\KelurahanController::class, 'index'])->name('kelurahan');
Route::get('/kelurahan-create', [App\Http\Controllers\KelurahanController::class, 'create'])->name('kelurahan-create');
Route::post('/kelurahan-store', [App\Http\Controllers\KelurahanController::class, 'store'])->name('kelurahan-store');
Route::get('/kelurahan/edit/{id}', [App\Http\Controllers\KelurahanController::class, 'edit'])->name('kelurahan-edit');
Route::put('/kelurahan-update/{id}', [App\Http\Controllers\KelurahanController::class, 'update'])->name('kelurahan-update');
Route::get('/kelurahan-delete/{id}', [App\Http\Controllers\KelurahanController::class, 'destroy'])->name('kelurahan-delete');

//RW

Route::get('/rw', [App\Http\Controllers\RwController::class, 'index'])->name('rw');
Route::get('/rw-create', [App\Http\Controllers\RwController::class, 'create'])->name('rw-create');
Route::post('/rw-store', [App\Http\Controllers\RwController::class, 'store'])->name('rw-store');
Route::get('/rw/edit/{id}', [App\Http\Controllers\RwController::class, 'edit'])->name('rw-edit');
Route::put('/rw-update/{id}', [App\Http\Controllers\RwController::class, 'update'])->name('rw-update');
Route::get('/rw-delete/{id}', [App\Http\Controllers\RwController::class, 'destroy'])->name('rw-delete');

//Laporan
Route::get('/laporan', [App\Http\Controllers\Kasus2Controller::class, 'index'])->name('laporan');
Route::get('/laporan-create', [App\Http\Controllers\Kasus2Controller::class, 'create'])->name('laporan-create');
Route::post('/laporan-store', [App\Http\Controllers\Kasus2Controller::class, 'store'])->name('laporan-store');
Route::get('/laporan/edit/{id}', [App\Http\Controllers\Kasus2Controller::class, 'edit'])->name('laporan-edit');
Route::put('/laporan-update/{id}', [App\Http\Controllers\Kasus2Controller::class, 'update'])->name('laporan-update');
Route::get('/laporan-delete/{id}', [App\Http\Controllers\Kasus2Controller::class, 'destroy'])->name('laporan-delete');

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi',ProvinsiController::class);
use App\Http\Controllers\KotaController;
Route::resource('kota',KotaController::class);
use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan',KecamatanController::class);
use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan',KelurahanController::class);
use App\Http\Controllers\RwController;
Route::resource('rw',RwController::class);
use App\Http\Controllers\Kasus2Controller;
Route::resource('tracking',Kasus2Controller::class);





