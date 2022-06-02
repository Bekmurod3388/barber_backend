<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::resource('/services' ,   \App\Http\Controllers\Api\ApiServecesController::class );
    Route::resource('/bookings' ,   \App\Http\Controllers\Api\ApiBookingController::class );
    Route::resource('/contacts' ,   \App\Http\Controllers\Api\ApiContactController::class );
    Route::resource('/barbers',\App\Http\Controllers\Api\ApiBarberController::class);
    Route::resource('/videos',\App\Http\Controllers\Api\VideoController::class);
    Route::resource('/photos',\App\Http\Controllers\Api\PhotoController::class);
    Route::resource('/certificates',\App\Http\Controllers\Api\CertificateController::class);
    Route::get('/today', [\App\Http\Controllers\Api\ApiBookingController::class, 'today']);
    Route::get('/tomorrow', [\App\Http\Controllers\Api\ApiBookingController::class, 'tomorrow']);
    Route::get('/after_tomorrow', [\App\Http\Controllers\Api\ApiBookingController::class, 'after_tomorrow']);


