<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinsi',[ProvinsiController::class, 'index']);
Route::post('provinsi',[ProvinsiController::class, 'store']);
Route::get('provinsi/{id?}',[ProvinsiController::class, 'show']);
Route::post('provinsi/update/{id}',[ProvinsiController::class, 'update']);
Route::delete('provinsi/{id}',[ProvinsiController::class, 'destroy']);

Route::get('provinsi2',[ApiController::class, 'provinsi']);
Route::get('kota', [ApiController::class,'kota']);
Route::get('kota/{id?}', [ApiController::class,'showkota']);
Route::get('kecamatan', [ApiController::class,'kecamatan']);
Route::get('kecamatan/{id?}', [ApiController::class,'showkecamatan']);
Route::get('kelurahan', [ApiController::class,'kelurahan']);
Route::get('kelurahan/{id?}', [ApiController::class,'showkelurahan']);
Route::get('rw', [ApiController::class,'rw']);
Route::get('rw/{id?}', [ApiController::class,'showrw']);
Route::get('provinsi2/{id?}',[ApiController::class, 'show']);
Route::get('indonesia', [ApiController::class,'indonesia']);
Route::get('global', [ApiController::class,'global']);