<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\TravelController as AdminTravelsController;

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

// rotte raggruppate
Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    // rotta per la home dell'admin
    Route::get('/', AdminHomeController::class)->name('home');

    // rotte per le CRUD dei viaggi
    Route::get('/travel', [AdminTravelsController::class, 'index'])->name('travel.index');
    Route::get('/travel/create', [AdminTravelsController::class, 'create'])->name('travel.create');
    Route::get('/travel/{travel}', [AdminTravelsController::class, 'show'])->name('travel.show')->withTrashed();
    Route::post('/travel', [AdminTravelsController::class, 'store'])->name('travel.store');
    Route::get('/travel/{travel}/edit', [AdminTravelsController::class, 'edit'])->name('travel.edit')->withTrashed();
    Route::put('/travel/{travel}', [AdminTravelsController::class, 'update'])->name('travel.update')->withTrashed();
    Route::delete('/travel/{travel}', [AdminTravelsController::class, 'destroy'])->name('travel.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
