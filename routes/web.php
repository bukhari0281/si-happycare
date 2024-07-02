<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HealthDestination;
use App\Http\Controllers\HealthDestinationController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TouristController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // Untuk perloginan duniawi
    Route::get('login', [AuthController::class,'index'])->name('login');
    Route::get('register', [AuthController::class,'register'])->name('register');
    Route::post('lagi_di_cek_sabar', [AuthController::class,'proses_login'])->name('proses_login');
    Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

});
// CLIENT -> Halaman untuk front-end
Route::get('/', [ClientController::class, 'home'])->name('home'); // home
Route::post('/faskes/search', [ClientController::class, 'home']); // search
Route::get('/about-us', [ClientController::class, 'about'])->name('about'); // about
Route::get('/contact-us', [ClientController::class, 'contact'])->name('contact'); // contact
Route::get('/faskes', [ClientController::class, 'faskes'])->name('faskes'); // faskes
Route::get('/faskes/{id}', [ClientController::class, 'show_faskes'])->name('show_faskes'); // detail faskes
Route::get('/wisata', [ClientController::class, 'wisata'])->name('wisata'); // wisata
Route::get('/wisata/{id}', [ClientController::class, 'detail_wisata'])->name('detail_wisata'); // detail wisata
// Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    // Rute Admin
    Route::middleware('cek_login:admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index_dashboard');
            Route::get('/users', function () {
                // Matches The "/admin/users" URL
            });
            Route::resource('/health-destination', HealthDestinationController::class); // HEALTH DESTINATION
            Route::resource('/tourist-destination', TouristController::class); // HEALTH DESTINATION
            Route::resource('/galeri', GalleryController::class); // GALERI
            Route::resource('/kontak', KontakController::class); // KONTAK
            Route::resource('/layanan', LayananController::class); // LAYANAN
            Route::resource('/bahasa', LanguageController::class); // BAHASA
            Route::resource('/fasilitas', FasilitasController::class); // FASILITAS
            Route::get('jenis/wisata', [CategoryController::class, 'index_jenis_wisata']); // JENIS WISATA
            Route::get('jenis/faskes', [CategoryController::class, 'index_jenis_faskes']); // JENIS FASKES
            Route::get('logout', [AuthController::class,'logout'])->name('logout');
        });

        // Route untuk 'jenis/wisata' dan 'jenis/faskes'
        Route::controller(CategoryController::class)->group(function () {
            Route::get('jenis/wisata', 'index_jenis_wisata')->name('jenis.wisata');
            Route::get('jenis/faskes', 'index_jenis_faskes')->name('jenis.faskes');
        });
    });

    // Rute User (jika ada)
    Route::middleware('cek_login:pl_kesehatan')->group(function () {
        Route::prefix('admin/kesehatan')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index_dashboard');
            Route::get('/users', function () {
                // Matches The "/admin/users" URL
            });
            Route::resource('/health-destination', HealthDestinationController::class)->names([
                'create' => 'plk.health-destination.create',
                'store' => 'plk.health-destination.store',
                'edit' => 'plk.health-destination.edit',
                'update' => 'plk.health-destination.update',
                'destroy' => 'plk.health-destination.destroy',
                'show' => 'plk.health-destination.show',
                'index' => 'plk.health-destination.index',
            ]); // HEALTH DESTINATION
            Route::resource('/galeri', GalleryController::class); // GALERI
            Route::resource('/kontak', KontakController::class); // KONTAK
            Route::resource('/layanan', LayananController::class); // LAYANAN
            Route::resource('/bahasa', LanguageController::class); // BAHASA
            Route::resource('/fasilitas', FasilitasController::class); // FASILITAS
            Route::get('/jenis/wisata', [CategoryController::class, 'index_jenis_wisata']); // JENIS WISATA
            Route::get('/jenis/faskes', [CategoryController::class, 'index_jenis_faskes']); // JENIS FASKES
        });
        Route::get('logout', [AuthController::class,'logout'])->name('logout');

        // Route untuk 'jenis/wisata' dan 'jenis/faskes'
        Route::controller(CategoryController::class)->group(function () {
            Route::get('jenis/wisata', 'index_jenis_wisata')->name('jenis.wisata');
            Route::get('jenis/faskes', 'index_jenis_faskes')->name('jenis.faskes');
        });

    });

    // Rute User (jika ada)
    Route::middleware('cek_login:pl_wisata')->group(function () {
        Route::prefix('admin/wisata')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index_dashboard');
            Route::get('/users', function () {
                // Matches The "/admin/users" URL
            });
            Route::resource('/tourist-destination', TouristController::class); // HEALTH DESTINATION
            Route::resource('/galeri', GalleryController::class); // GALERI
            Route::resource('/kontak', KontakController::class); // KONTAK
            Route::resource('/bahasa', LanguageController::class); // BAHASA
            Route::resource('/fasilitas', FasilitasController::class); // FASILITAS
            Route::get('jenis/wisata', [CategoryController::class, 'index_jenis_wisata']); // JENIS WISATA
            Route::get('jenis/faskes', [CategoryController::class, 'index_jenis_faskes']); // JENIS FASKES
        });
        Route::get('logout', [AuthController::class,'logout'])->name('logout');

        // Route untuk 'jenis/wisata' dan 'jenis/faskes'
        Route::controller(CategoryController::class)->group(function () {
            Route::get('jenis/wisata', 'index_jenis_wisata')->name('jenis.wisata');
            Route::get('jenis/faskes', 'index_jenis_faskes')->name('jenis.faskes');
        });

    });
});

// ADMIN -> Halaman untuk back-end
Route::get('/dashboard/store', [DashboardController::class, 'store']);

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('index_dashboard');
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
//     Route::resource('/health-destination', HealthDestinationController::class); // HEALTH DESTINATION
//     Route::resource('/tourist-destination', TouristController::class); // HEALTH DESTINATION
//     Route::resource('/galeri', GalleryController::class); // GALERI
//     Route::resource('/kontak', KontakController::class); // KONTAK
//     Route::resource('/layanan', LayananController::class); // LAYANAN
//     Route::resource('/bahasa', LanguageController::class); // BAHASA
//     Route::resource('/fasilitas', FasilitasController::class); // FASILITAS
//     Route::get('jenis/wisata', [CategoryController::class, 'index_jenis_wisata']); // JENIS WISATA
//     Route::get('jenis/faskes', [CategoryController::class, 'index_jenis_faskes']); // JENIS FASKES
// });
