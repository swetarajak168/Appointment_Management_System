<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EducationController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::get('/user/index',[UserController::class,'index'])->name('user.index');
    Route::get('/user/create',[UserController::class,'create'])->name('user.create');
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');
    Route::get('/user/{id}/show',[UserController::class,'show'])->name('user.show');
    Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');
    Route::put('/user/{id}/update',[UserController::class,'update'])->name('user.update');
    Route::delete('/user/{id}/delete',[UserController::class,'destroy'])->name('user.delete');
   
    Route::get('/doctor',[DoctorController::class,'index'])->name('doctor.index');
    Route::get('/doctor/create',[DoctorController::class,'create'])->name('doctor.create');
    Route::post('/doctor/store',[DoctorController::class,'store'])->name('doctor.store');
    Route::get('/doctor/{id}/show',[DoctorController::class,'show'])->name('doctor.show');
    Route::get('/doctor/{doctor}/edit',[DoctorController::class,'edit'])->name('doctor.edit');
    Route::put('/doctor/{doctor}/update',[DoctorController::class,'update'])->name('doctor.update');
    Route::delete('/doctor/{doctor}/delete',[DoctorController::class,'destroy'])->name('doctor.delete');

    Route::get('/education',[EducationController::class,'index'])->name('education.index');
    Route::get('/education/create',[EducationController::class,'create'])->name('education.create');
    Route::post('/education/store',[EducationController::class,'store'])->name('education.store');
    
    Route::get('/appointment',[AppointmentController::class,'index'])->name('appointment.index');

});
Route::get('/dashboard/educationdetail',[AdminController::class,'addeducation']);

require __DIR__.'/auth.php';
