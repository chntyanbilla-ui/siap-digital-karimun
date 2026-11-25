<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLERS
|--------------------------------------------------------------------------
*/

// Dashboard Admin
use App\Http\Controllers\DashboardController;

// Landing / Public
use App\Http\Controllers\LandingController;

// OPD
use App\Http\Controllers\OpdController;

// Proses Bisnis
use App\Http\Controllers\ProsesBisnisController;

// Layanan
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LayananAdminController;

// Aplikasi
use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\AplikasiAdminController;

// Data Informasi
use App\Http\Controllers\DataInformasiController;
use App\Http\Controllers\DataInformasiAdminController;

// Infrastruktur
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\InfrastrukturAdminController;

// Keamanan
use App\Http\Controllers\KeamananController;
use App\Http\Controllers\KeamananAdminController;


/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'index'])
    ->name('home');


/*
|--------------------------------------------------------------------------
| PROSES BISNIS - PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/proses-bisnis', [LandingController::class, 'prosesBisnis'])
    ->name('proses-bisnis');

Route::get('/proses-bisnis/{id}', [LandingController::class, 'detailProsesBisnis'])
    ->name('proses-bisnis.detail');


/*
|--------------------------------------------------------------------------
| LAYANAN - PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/layanan', [LayananController::class, 'index'])
    ->name('layanan');

Route::get('/layanan/{id}', [LayananController::class, 'detail'])
    ->name('layanan.detail');


/*
|--------------------------------------------------------------------------
| APLIKASI - PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/aplikasi', [AplikasiController::class, 'index'])
    ->name('aplikasi');

Route::get('/aplikasi/{id}', [AplikasiController::class, 'detail'])
    ->name('aplikasi.detail');


/*
|--------------------------------------------------------------------------
| DATA INFORMASI - PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/data-informasi', [DataInformasiController::class, 'index'])
    ->name('data-informasi');

Route::get('/data-informasi/{id}', [DataInformasiController::class, 'detail'])
    ->name('data-informasi.detail');


/*
|--------------------------------------------------------------------------
| INFRASTRUKTUR - PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/infrastruktur', [InfrastrukturController::class, 'index'])
    ->name('infrastruktur');

Route::get('/infrastruktur/{id}', [InfrastrukturController::class, 'detail'])
    ->name('infrastruktur.detail');


/*
|--------------------------------------------------------------------------
| KEAMANAN - PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/keamanan', [KeamananController::class, 'index'])
    ->name('keamanan');

Route::get('/keamanan/{id}', [KeamananController::class, 'detail'])
    ->name('keamanan.detail');


/*
|--------------------------------------------------------------------------
| DASHBOARD & ADMIN
|--------------------------------------------------------------------------
|
| Semua halaman di bawah ini hanya bisa diakses setelah login.
|
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | OPD
    |--------------------------------------------------------------------------
    */

    Route::resource('opd', OpdController::class);


    /*
    |--------------------------------------------------------------------------
    | PROSES BISNIS ADMIN
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'proses-bisnis-admin',
        ProsesBisnisController::class
    );


    /*
    |--------------------------------------------------------------------------
    | LAYANAN ADMIN
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'layanan-admin',
        LayananAdminController::class
    );


    /*
    |--------------------------------------------------------------------------
    | APLIKASI ADMIN
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'aplikasi-admin',
        AplikasiAdminController::class
    );


    /*
    |--------------------------------------------------------------------------
    | DATA INFORMASI ADMIN
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'data-informasi-admin',
        DataInformasiAdminController::class
    );


    /*
    |--------------------------------------------------------------------------
    | INFRASTRUKTUR ADMIN
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'infrastruktur-admin',
        InfrastrukturAdminController::class
    );


    /*
    |--------------------------------------------------------------------------
    | KEAMANAN ADMIN
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'keamanan-admin',
        KeamananAdminController::class
    );

});


/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
|
| Laravel Breeze
|
*/

require __DIR__.'/auth.php';