<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::get('/dashboard/user',[UserController::class,'index'])->name('user');
    Route::get('/dashboard/user/create',[UserController::class,'create'])->name('user.create');
    Route::post('/dashboard/user/store',[UserController::class,'store'])->name('user.store');
    Route::get('/dashboard/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');
    Route::put('/dashboard/user/{id}/update',[UserController::class,'update'])->name('user.update');
    Route::delete('/dashboard/user/{id}/delete',[UserController::class,'destroy'])->name('user.delete');
    Route::get('/dashboard/appointment',[AppointmentController::class,'index'])->name('appointment');

    Route::get('/dashboard/doctor',[DoctorController::class,'index'])->name('doctor');
    Route::get('/dashboard/doctor/create',[DoctorController::class,'create'])->name('doctor.create');
});
Route::get('/dashboard/educationdetail',[AdminController::class,'addeducation']);

require __DIR__.'/auth.php';
