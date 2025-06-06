<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Ruta login placeholder para evitar error Route [login] not defined
Route::get('/login', function () {
    return 'Login no habilitado';
})->name('login');

// Rutas sin middleware auth
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::resource('/activities', ActivityController::class);

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
