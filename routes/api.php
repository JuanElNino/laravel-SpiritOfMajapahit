<?php

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

Route::get('lokasi', [LokasiController::class, 'index']);

Route::get('/lokasi/{id}', [LokasiController::class, 'getId']);

Route::post('/lokasi', [LokasiController::class, 'create']);

Route::put('/lokasi/update/{id}', [LokasiController::class, 'update']);

Route::delete('/lokasi/{id}', [LokasiController::class, 'delete']);
