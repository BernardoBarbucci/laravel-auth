<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProjectController as ProjectController;
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

// rotta predefinita di autenticazione
Auth::routes();

// rotte per gli utenti loggati correttamente 
Route::middleware('auth')->gruop(function () {
    // rotte per gli admin
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        // route per project
        Route::resource('projects', ProjectController::class);

        // route per i data
        Route::get('/data', [AdminDashboardController::class, 'index'])->name('data.index');
        Route::post('/data', [AdminDashboardController::class, 'store'])->name('data.store');
        Route::post('/data/create', [AdminDashboardController::class, 'create'])->name('data.create');
        Route::post('/data/{data}', [AdminDashboardController::class, 'show'])->name('data.show');
        Route::post('/data/{data}/edit', [AdminDashboardController::class, 'edit'])->name('data.edit');
    });
});
