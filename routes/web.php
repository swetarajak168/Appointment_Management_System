<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactDetailController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PasswordChangeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TestimonialStoreController;

use App\Http\Controllers\TrashController;
use App\Http\Controllers\UserController;
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
Route::get('/', [IndexController::class, 'index'])->name('home');
// Route::get('/about', [IndexController::class, 'about'])->name('about-us');
Route::get('/page/{slug}', [IndexController::class, 'show'])->name('dynamicpage');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::resource('booking', BookingController::class);
Route::resource('clienttestimonial', TestimonialStoreController::class);
Route::get('/doctors/live-search',[BookingController::class, 'liveSearch'])->name('liveSearch.doctors'); //seaching
Route::post('/doctors/search', [BookingController::class, 'search'])->name('searchdoctor');

Route::post('/sendmail',[ContactController::class,'sendmail'])->name('contactmail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //custom password Change
    Route::get('/change-password', [PasswordChangeController::class, 'edit'])->name('change.password');
    Route::put('/update-password', [PasswordChangeController::class, 'update'])->name('update.password');


    Route::resource('user', UserController::class);
    Route::resource('department', DepartmentController::class);


    Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('/doctor/{id}/show', [DoctorController::class, 'show'])->name('doctor.show');
    Route::get('/doctor/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::put('/doctor/{doctor}/update', [DoctorController::class, 'update'])->name('doctor.update');
    Route::delete('/doctor/{doctor}/delete', [DoctorController::class, 'destroy'])->name('doctor.delete');

    Route::post('/doctor/{doctor}/reset-password', [ResetPasswordController::class, 'reset_password'])->name('doctor.resetpassword');
    Route::get('/doctor/get-districts', [DoctorController::class, 'getDistrict'])->name('get-districts');

    Route::resource('appointment', AppointmentController::class);
    Route::get('user-notify', [AppointmentController::class, 'notify']);

    Route::resource('trash', TrashController::class);
    Route::post('/trash/{trash}/restore', [TrashController::class, 'restore'])->name('trash.restore');

    Route::resource('schedule', ScheduleController::class);

    Route::get('/page/changelanguage',[PageController::class, 'change_language'])->name('changelanguage');
    Route::resource('page', PageController::class);

    Route::get('/mark-as-read', [AdminController::class,'markAsRead'])->name('mark-as-read');

    Route::resource('menu', MenuController::class);
    Route::resource('contactDetail', ContactDetailController::class);

    Route::resource('testimonial', TestimonialsController::class);
    Route::resource('faq', FAQController::class);
    Route::resource('patient', PatientController::class);
});


require __DIR__ . '/auth.php';
