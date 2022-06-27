<?php

use App\Models\Wilayah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Backend\UploadController;
use App\Http\Controllers\Backend\WilayahController;
use App\Http\Controllers\Backend\KendaraanController;
use App\Http\Controllers\Backend\ReservasiController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

// User
Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/admin/create', [UserController::class, 'createAdmin'])->name('user.admin.create');
Route::get('user/manager/create', [UserController::class, 'createManager'])->name('user.manager.create');
Route::get('user/leader/create', [UserController::class, 'createLeader'])->name('user.leader.create');
Route::get('user/guide/create', [UserController::class, 'createGuide'])->name('user.guide.create');
Route::post('user/admin', [UserController::class, 'userStore'])->name('user.admin.store');
Route::post('user/leader', [UserController::class, 'leaderStore'])->name('user.leader.store');
Route::get('user/admin/edit/{user}', [UserController::class, 'editAdmin'])->name('user.admin.edit');
Route::get('user/manager/edit/{user}', [UserController::class, 'editManager'])->name('user.manager.edit');
Route::get('user/customer/edit/{user}', [UserController::class, 'editCustomer'])->name('user.customer.edit');
Route::get('user/leader/edit/{user}', [UserController::class, 'editLeader'])->name('user.leader.edit');
Route::put('user/admin-update/{user}', [UserController::class, 'updateUser'])->name('user.admin.update');
Route::put('user/customer-update/{user}', [UserController::class, 'updateCustomer'])->name('user.customer.update');
Route::put('user/leader-update/{user}', [UserController::class, 'updateLeader'])->name('user.leader.update');
Route::delete('user/admin-delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// Wilayah
Route::resource('wilayah', WilayahController::class);
Route::get('wilayah-data', [WilayahController::class, 'data'])->name('wilayah.data');

Route::get('data/kota/{id}', function ($id)
{
    $kota = Wilayah::where('induk',$id)->get();
    return response()->json($kota);
});

Route::get('data/kecamatan/{id}', function ($id)
{
    $kecamatan = Wilayah::where('induk',$id)->get();
    return response()->json($kecamatan);
});

Route::get('data/desa/{id}', function ($id)
{
    $desa = Wilayah::where('induk',$id)->get();
    return response()->json($desa);
});

// Hotel
Route::resource('hotel', HotelController::class);
Route::put('hotel/img-delete/{id}', [HotelController::class, 'imgDestroy']);

// Kendaraan
Route::resource('kendaraan', KendaraanController::class);
Route::put('kendaraan/img-delete/{id}', [KendaraanController::class, 'imgDestroy']);

// Reservasi
Route::get('reservasi/data', [ReservasiController::class, 'data'])->name('reservasi.data');
Route::get('reservasi/riwayat', [ReservasiController::class, 'riwayat'])->name('reservasi.riwayat');

// Temporary Upload
Route::post('image-upload', [UploadController::class, 'store'])->name('upload');


Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
