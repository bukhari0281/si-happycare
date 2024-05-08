<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HealthDestination;
use App\Http\Controllers\HealthDestinationController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TouristController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// ADMIN -> Halaman untuk back-end
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index_dashboard');
Route::get('/dashboard/store', [DashboardController::class, 'store']);
Route::resource('/health-destination', HealthDestinationController::class); // HEALTH DESTINATION
Route::resource('/tourist-destination', TouristController::class); // HEALTH DESTINATION
Route::resource('/kontak', KontakController::class); // HEALTH DESTINATION
Route::resource('/layanan', LayananController::class); // LAYANAN
Route::resource('/bahasa', LanguageController::class); // BAHASA
Route::resource('/fasilitas', FasilitasController::class); // FASILITAS
Route::get('jenis/wisata', [CategoryController::class, 'index_jenis_wisata']); // JENIS WISATA
Route::get('jenis/faskes', [CategoryController::class, 'index_jenis_faskes']); // JENIS FASKES


// CLIENT -> Halaman untuk front-end
Route::get('/', function () {
    return view('client.utils.layout');
});

