<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::get('/events/show/{id}', [EventController::class, 'show'])->name('events.show');
    Route::get('/events/{filter?}', [EventController::class, 'index'])->name('events.index');
    Route::post('/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/edit/{id}', [EventController::class, 'update'])->name('events.update');
    Route::get('/events/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
    Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('events.destroy');

});

Route::get('/', [EventController::class, 'index']);

require __DIR__.'/auth.php';
