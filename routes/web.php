<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/check_patient_email',[ValidationController::class,'check_patient_email'])->name('check_patient_email');
Route::get('/check_patient_phone_no',[ValidationController::class,'check_patient_phone_no'])->name('check_patient_phone_no');
Route::get('/check_doctor_email',[ValidationController::class,'check_doctor_email'])->name('check_doctor_email');
Route::get('/check_doctor_phone_no',[ValidationController::class,'check_doctor_phone_no'])->name('check_doctor_phone_no');
Route::get('/validate_patient',[ValidationController::class,'validate_patient'])->name('validate_patient');
Route::get('/validate_doc',[ValidationController::class,'validate_doc'])->name('validate_doc');
Route::get('/check_docemail_update',[ValidationController::class,'check_docemail_update'])->name('check_docemail_update');
Route::get('/check_docphoneno_update',[ValidationController::class,'check_docphoneno_update'])->name('check_docphoneno_update');
Route::get('/check_useremail_update',[ValidationController::class,'check_useremail_update'])->name('check_useremail_update');
Route::get('/check_userphoneno_update',[ValidationController::class,'check_userphoneno_update'])->name('check_userphoneno_update');

require __DIR__.'/auth.php';
