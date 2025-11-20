<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\MenuAdminController;
use App\Http\Controllers\Admin\SpotFotoController;
use App\Http\Controllers\Admin\ReservationAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\SpotFoto;


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('home'));

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/reservasi', fn() => view('reservasi'));
Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservasi.store');

Route::get('/event', fn() => view('event'));
Route::get('/tentang', fn() => view('tentang'));
Route::get('/kontak', fn() => view('kontak'));

// Spot foto untuk user
Route::get('/spot-foto', function () {
    $spot = SpotFoto::all();
    return view('spotfoto', compact('spot'));
})->name('spot.front');


/*
|--------------------------------------------------------------------------
| ADMIN AUTH
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
})->name('admin.logout');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

// Admin Reservasi
Route::middleware(['admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Reservasi admin CRUD
        Route::get('/reservasi', [ReservationAdminController::class, 'index'])->name('reservasi.index');
        Route::get('/reservasi/{id}/edit', [ReservationAdminController::class, 'edit'])->name('reservasi.edit');
        Route::put('/reservasi/{id}', [ReservationAdminController::class, 'update'])->name('reservasi.update');
        Route::delete('/reservasi/{id}', [ReservationAdminController::class, 'destroy'])->name('reservasi.destroy');

        // Menu admin CRUD
        Route::resource('menu', MenuAdminController::class);

        // Spot foto CRUD
        Route::resource('spot', SpotFotoController::class);
    });
