<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\WilayahController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Backend\KendaraanController;
use App\Http\Controllers\Backend\ReservasiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

// User
Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/admin/create', [UserController::class, 'createAdmin'])->name('user.admin.create');
Route::get('user/manager/create', [UserController::class, 'createManager'])->name('user.manager.create');
Route::post('user/admin', [UserController::class, 'storeUser'])->name('user.admin.store');
Route::get('user/admin/edit/{user}', [UserController::class, 'editAdmin'])->name('user.admin.edit');
Route::get('user/manager/edit/{user}', [UserController::class, 'editManager'])->name('user.manager.edit');
Route::get('user/customer/edit/{user}', [UserController::class, 'editCustomer'])->name('user.customer.edit');
Route::put('user/admin-update/{user}', [UserController::class, 'updateUser'])->name('user.admin.update');
Route::put('user/customer-update/{user}', [UserController::class, 'updateCustomer'])->name('user.customer.update');
Route::delete('user/admin-delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Wilayah
Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah.index');
Route::get('wilayah/tambah', [WilayahController::class, 'create'])->name('wilayah.create');
Route::post('wilayah/tambah', [WilayahController::class, 'store'])->name('wilayah.store');
Route::get('wilayah/data', [WilayahController::class, 'data'])->name('wilayah.data');
Route::get('wilayah/edit/{id}', [WilayahController::class, 'edit'])->name('wilayah.edit');
Route::put('wilayah/update/{id}', [WilayahController::class, 'update'])->name('wilayah.update');
Route::delete('wilayah/destroy/{id}', [WilayahController::class, 'destroy'])->name('wilayah.destroy');

// Hotel
Route::get('hotel', [HotelController::class, 'index'])->name('hotel.index');
Route::get('hotel/tambah', [HotelController::class, 'create'])->name('hotel.create');

// Kendaraan
<<<<<<< HEAD
Route::get('kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('kendaraan/tambah', [KendaraanController::class, 'create'])->name('kendaraan.create');
=======
Route::resource('kendaraan', KendaraanController::class);
>>>>>>> b28d0b9891daf7a59ded67b99c95bdbd75ef0140

// Reservasi
Route::get('reservasi/data', [ReservasiController::class, 'data'])->name('reservasi.data');
Route::get('reservasi/riwayat', [ReservasiController::class, 'riwayat'])->name('reservasi.riwayat');


Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
