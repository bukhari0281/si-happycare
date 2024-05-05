<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HealthDestination;
use App\Http\Controllers\HealthDestinationController;
use App\Http\Controllers\LayananController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index_dashboard');

// HEALTH DESTINATION
Route::resource('/health-destination', HealthDestinationController::class);

// LAYANAN
Route::resource('/layanan', LayananController::class);

// BAHASA
Route::resource('/bahasa', LanguageController::class);


