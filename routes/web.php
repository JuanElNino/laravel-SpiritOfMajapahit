<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LokasiClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Admin Dashboard
Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');

//Admin Wisata
Route::get('/admin/wisata', [LokasiClientController::class, 'indexWisata'])->name('admin.wisata');
Route::get('/admin/wisata/add', [LokasiClientController::class, 'createWisata'])->name('admin.wisata.add');
Route::post('/admin/wisata/store', [LokasiClientController::class, 'storeWisata'])->name('admin.wisata.store');
Route::get('/admin/wisata/edit/{id}', [LokasiClientController::class, 'editWisata'])->name('admin.wisata.edit');
Route::post('/admin/wisata/update/{id}', [LokasiClientController::class, 'updateWisata'])->name('admin.wisata.update');
Route::get('/admin/wisata/delete/{id}', [LokasiClientController::class, 'destroyWisata'])->name('admin.wisata.delete');

//Admin Travel
Route::get('/admin/travel', [LokasiClientController::class, 'indexTravel'])->name('admin.travel');
Route::get('/admin/travel/add', [LokasiClientController::class, 'createTravel'])->name('admin.travel.add');
Route::post('/admin/travel/store', [LokasiClientController::class, 'storeTravel'])->name('admin.travel.store');
Route::get('/admin/travel/edit/{id}', [LokasiClientController::class, 'editTravel'])->name('admin.travel.edit');
Route::post('/admin/travel/update/{id}', [LokasiClientController::class, 'updateTravel'])->name('admin.travel.update');
Route::get('/admin/travel/delete/{id}', [LokasiClientController::class, 'destroyTravel'])->name('admin.travel.delete');

//Admin Toko
Route::get('/admin/toko', [LokasiClientController::class, 'indexToko'])->name('admin.toko');
Route::get('/admin/toko/add', [LokasiClientController::class, 'createToko'])->name('admin.toko.add');
Route::post('/admin/toko/store', [LokasiClientController::class, 'storeToko'])->name('admin.toko.store');
Route::get('/admin/toko/edit/{id}', [LokasiClientController::class, 'editToko'])->name('admin.toko.edit');
Route::post('/admin/toko/update/{id}', [LokasiClientController::class, 'updateToko'])->name('admin.toko.update');
Route::get('/admin/toko/delete/{id}', [LokasiClientController::class, 'destroyToko'])->name('admin.toko.delete');

//Admin Hotel
Route::get('/admin/hotel', [LokasiClientController::class, 'indexHotel'])->name('admin.hotel');
Route::get('/admin/hotel/add', [LokasiClientController::class, 'createHotel'])->name('admin.hotel.add');
Route::post('/admin/hotel/store', [LokasiClientController::class, 'storeHotel'])->name('admin.hotel.store');
Route::get('/admin/hotel/edit/{id}', [LokasiClientController::class, 'editHotel'])->name('admin.hotel.edit');
Route::post('/admin/hotel/update/{id}', [LokasiClientController::class, 'updateHotel'])->name('admin.hotel.update');
Route::get('/admin/hotel/delete/{id}', [LokasiClientController::class, 'destroyHotel'])->name('admin.hotel.delete');

//Admin Galeri
Route::get('/admin/galeri/{id}', [GaleriController::class, 'index'])->name('admin.galeri');
Route::get('/admin/galeri/edit/{id}', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('admin.galeri.store');
Route::get('/admin/galeri/edit/delete/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.delete');
