<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TrashController;
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');



Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
//Routes for frontend
Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::resource('booking', BookingController::class);
Route::resource('patient', PatientController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('user', UserController::class);

    Route::resource('department', DepartmentController::class);


    Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('/doctor/{id}/show', [DoctorController::class, 'show'])->name('doctor.show');
    Route::get('/doctor/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::put('/doctor/{doctor}/update', [DoctorController::class, 'update'])->name('doctor.update');
    Route::delete('/doctor/{doctor}/delete', [DoctorController::class, 'destroy'])->name('doctor.delete');

    Route::resource('appointment', AppointmentController::class);


    Route::resource('trash', TrashController::class);
    Route::post('/trash/{trash}/restore', [TrashController::class, 'restore'])->name('trash.restore');

    Route::resource('schedule', ScheduleController::class);
});


require __DIR__ . '/auth.php';
