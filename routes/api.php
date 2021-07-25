<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LokasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//APILokasi
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::get('/lokasi/{id}', [LokasiController::class, 'getId']);
Route::get('/lokasi/{jenis_lokasi?}', [LokasiController::class, 'index']);
Route::post('/lokasi', [LokasiController::class, 'create']);
Route::put('/lokasi/update/{id}', [LokasiController::class, 'update']);
Route::delete('/lokasi/{id}', [LokasiController::class, 'delete']);

//APIGaleri
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/galeri/{id}', [GaleriController::class, 'getId']);
Route::get('/galeri/lokasi/{id}', [GaleriController::class, 'getLokasi']);
Route::post('/galeri', [GaleriController::class, 'create']);
Route::put('/galeri/update/{id}', [GaleriController::class, 'update']);
Route::delete('/galeri/{id}', [GaleriController::class, 'delete']);
