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

Auth::routes([
    'register' => false,
]);

Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('services', App\Http\Controllers\ServicesController::class);
    Route::resource('photo', App\Http\Controllers\PhotoController::class);
    Route::resource('vidios', App\Http\Controllers\VidioController::class);
    Route::resource('bookings', App\Http\Controllers\BookingController::class);
    Route::resource('barber', App\Http\Controllers\BarberController::class);
    Route::resource('sertifikat', App\Http\Controllers\CertificateController::class);

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::resource('/api/serveces' ,   \App\Http\Controllers\Api\ApiServecesController::class );

