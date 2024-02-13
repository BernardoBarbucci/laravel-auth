<?php

use App\Http\Controllers\Admin\ProjectController as ProjectController;
use Illuminate\Support\Facades\Auth;
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

// rotta predefinita di autenticazione
Auth::routes();

// rotte per gli admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rotte per gli utenti loggati correttamente 
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // route per project
        Route::resource('projects', ProjectController::class);

        // route per i data
        Route::get('/data', [ProjectController::class, 'index'])->name('data.index');
        Route::post('/data', [ProjectController::class, 'store'])->name('data.store');
        Route::post('/data/create', [ProjectController::class, 'create'])->name('data.create');
        Route::post('/data/{data}', [ProjectController::class, 'show'])->name('data.show');
        Route::post('/data/{data}/edit', [ProjectController::class, 'edit'])->name('data.edit');
        Route::put('/data/{data}', [ProjectController::class, 'update'])->name('data.update');
        Route::delete('/data/{data}', [ProjectController::class, 'destroy'])->name('data.destroy');
    });

// reindirizzare gli utenti NON autenticati & NON admin alla welcome per login/iscrizione 
Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            // utenti non admin e loggati correttamente reindirizzati alla home
            return redirect()->route('login');
        }
    } else {
        // utenti non admin e non loggati correttamente rispediti alla login
        return redirect()->route('welcome');
    }
});
