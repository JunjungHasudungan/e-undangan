<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function() {
    // ROUTE FOR ADMIN
    Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

    Route::view('undangan', 'undangan')->name('undangan');
});
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
