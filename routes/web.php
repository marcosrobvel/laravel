<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return 'Login no habilitado';
})->name('login');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::resource('/activities', ActivityController::class);

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::get('/bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
