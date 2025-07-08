<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::group(['middleware' => 'disable_back_btn'], function () {

Route::middleware(['auth', 'admin'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [AdminDashboardController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminDashboardController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminDashboardController::class, 'destroy'])->name('profile.destroy');
  });
});