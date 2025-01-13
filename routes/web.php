<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\User\SubmissionController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function() {
    // ROUTE FOR ADMIN
    Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

    Route::get('getSubmmission/{userId}', [SubmissionController::class, 'getSubmissionByUser'])->name('');
});
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
