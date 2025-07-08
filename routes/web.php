<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PetugasController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth:customer'])->prefix('customer')->group(function () {
    Route::get('/home', [CustomerController::class, 'index'])->name('customer.home');
});

Route::middleware(['auth:warehouse'])->prefix('warehouse')->group(function () {
    Route::get('/home', [WarehouseController::class, 'index'])->name('warehouse.home');
});

Route::middleware(['auth:driver'])->prefix('driver')->group(function () {
    Route::get('/home', [DriverController::class, 'index'])->name('driver.home');
});

Route::middleware(['auth:petugas'])->prefix('petugas')->group(function () {
    Route::get('/home', [PetugasController::class, 'index'])->name('petugas.home');
});
