<?php

use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('services', App\Http\Controllers\ServicesController::class);
    Route::resource('contact_as', App\Http\Controllers\ContactAsController::class);
    Route::resource('bookings', App\Http\Controllers\BookingController::class);
//    Route::resource('facultets', App\Http\Controllers\FacultetController::class);
//    Route::get('/attendances/create', [\App\Http\Controllers\AttendanceController::class, 'create'])->name('attendance.create');
//    Route::post('/attendance', [\App\Http\Controllers\AttendanceController::class, 'store'])->name('attendance.store');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',function(){
    return  view('admin.dashboard');
});


