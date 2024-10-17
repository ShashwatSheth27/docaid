<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\AppointmentController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::group(['namespace' => 'Auth','middleware'=>'guest:admin'], function () {
    # Login Routes
    Route::get('login',[AdminController::class,'create'])->name('showadminLogin');
    Route::post('login',[AdminController::class,'attemptlogin'])->name('admin.Login');
});

Route::post('logout',[AdminController::class,'destroy'])->name('admin.logout');

Route::group(['middleware' => 'auth:admin'], function () {
	Route::get('dashboard',[AdminController::class,'index'])->name('admin.index');
	Route::resource('dashboard/doctors',DoctorController::class);
	Route::resource('dashboard/patients',PatientController::class);
	Route::resource('dashboard/appointments',AppointmentController::class);
});

Route::middleware('shared')->group(function () {
    Route::post('book-appointment', [AppointmentController::class, 'store'])->name('book-appointment');
});