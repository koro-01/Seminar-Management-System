<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimateurController;
use App\Http\Controllers\SeminaireController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route (Only for authenticated users)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Resource Routes for each controller (only accessible to authenticated users)
Route::middleware('auth')->group(function () {

    // Group Routes with the prefix 'Events'
    Route::prefix('Events')->group(function () {


        // Search routes
        Route::get('seminaires/search', [SeminaireController::class, 'search'])->name('seminaires.search');
        Route::get('membres/search', [MembreController::class, 'search'])->name('membres.search');

        // Animateur Routes
        Route::resource('animateurs', AnimateurController::class);
    
        // Seminaire Routes
        Route::resource('seminaires', SeminaireController::class);
    
      
    
        // Activite Routes
        Route::resource('activites', ActiviteController::class);
    
        // Membre Routes
        Route::resource('membres', MembreController::class);
    
        // Reservation Routes
        Route::resource('reservations', ReservationController::class);
    });
    
    // Profile Routes (already provided by Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
