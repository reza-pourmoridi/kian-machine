<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\menuData;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {return view('home');})->name('home');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/generate_sms_code', [UserController::class, 'generateSmsCode'])->name('generate_sms_code');



Route::middleware([AuthMiddleware::class])->group(function () {
    Route::middleware([menuData::class])->group(function () {
        Route::get('/dashboard', function () {return view('dashboard.dashboard');})->name('dashboard.dashboard');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');

        Route::get('/settings', function () {return view('dashboard.setting');})->name('dashboard.settings');
        Route::get('/repair/repair-form', function () {return view('dashboard.repair.repair');})->name('dashboard.repairForm');
        Route::get('/repair/repairs_list', function () {return view('dashboard.repair.repairsList');})->name('dashboard.repairsList');
        Route::get('/map', function () {return view('dashboard.map');})->name('dashboard.map');
        Route::get('/profile', function () {return view('dashboard.profile');})->name('dashboard.profile');

        Route::get('/cars-form', [CarController::class, 'create'])->name('dashboard.carsForm');
        Route::post('/cars-form', [CarController::class, 'store'])->name('cars.store');


        Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('dashboard.carsEdit');
        Route::post('/cars/{id}/update', [CarController::class, 'update'])->name('dashboard.carsUpdate');


        Route::get('/cars', [CarController::class, 'index'])->name('dashboard/cars.index');
        Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

        Route::post('/drivers-form', [DriverController::class, 'store'])->name('drivers.store');
        Route::get('/drivers-form', [DriverController::class, 'create'])->name('dashboard/drivers-form');

        Route::get('/drivers', [DriverController::class, 'index'])->name('dashboard/drivers.index');

        Route::get('/add-user', [UserController::class, 'create'])->name('dashboard.addUser');
        Route::post('/add-user', [UserController::class, 'store'])->name('dashboard.addUserStore');



        Route::get('/car-detail', function () {
            return view('dashboard/carDetail');
        });
    });
});


