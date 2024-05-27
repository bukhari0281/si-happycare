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

// metode nya get lalu masukkan namespace AuthController
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class,'index'])->name('login');
    Route::get('register', [AuthController::class,'register'])->name('register');
    Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
    Route::get('logout', [AuthController::class,'logout'])->name('logout');

    Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');
});

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::middleware(['auth'])->group(function () {

    // Rute Admin
    Route::prefix('admin')->middleware('cek_login:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index_dashboard');

        // Lebih baik gunakan controller untuk '/users' agar lebih terstruktur
        // Route::get('/users', [UserController::class, 'index']); // Sesuaikan dengan UserController Anda

        // Menggunakan resource controller untuk rute CRUD
        Route::resources([
            '/health-destination' => HealthDestinationController::class,
            '/tourist-destination' => TouristController::class,
            '/galeri' => GalleryController::class,
            '/kontak' => KontakController::class,
            '/layanan' => LayananController::class,
            '/bahasa' => LanguageController::class,
            '/fasilitas' => FasilitasController::class,
        ]);

        // Route untuk 'jenis/wisata' dan 'jenis/faskes'
        Route::controller(CategoryController::class)->group(function () {
            Route::get('jenis/wisata', 'index_jenis_wisata')->name('jenis.wisata');
            Route::get('jenis/faskes', 'index_jenis_faskes')->name('jenis.faskes');
        });
    });

    // Rute User (jika ada)
    Route::middleware('cek_login:user')->group(function () {
        // Route::resource('user', UserController::class); // Contoh
    });
});

// ADMIN -> Halaman untuk back-end
Route::get('/dashboard/store', [DashboardController::class, 'store']);

// CLIENT -> Halaman untuk front-end
Route::get('/', [ClientController::class, 'home']); // home
Route::post('/faskes/search', [ClientController::class, 'home']); // search
Route::get('/about-us', [ClientController::class, 'about']); // about
Route::get('/contact-us', [ClientController::class, 'contact']); // contact
Route::get('/faskes', [ClientController::class, 'faskes']); // faskes
Route::get('/faskes/{id}', [ClientController::class, 'show_faskes']); // detail faskes
Route::get('/wisata', [ClientController::class, 'wisata']); // wisata
Route::get('/wisata/{id}', [ClientController::class, 'detail_wisata']); // detail wisata

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
