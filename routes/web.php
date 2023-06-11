<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
    Route::post('/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/edit/{id}', [EventController::class, 'update'])->name('events.update');
    Route::get('/events/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
    Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('events.destroy');
});

require __DIR__.'/auth.php';