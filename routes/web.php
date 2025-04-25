<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;


use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;



Route::get('/', [MasterController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/admin', [AuthController::class, 'admin']);

Route::get('/atvdetail', [ActivityController::class, 'activity_detail']);

Route::get('/google/redirect', [AuthController::class, 'redirectToGoogle']);
Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/sendmail', [ActivityController::class, 'sendmail']);
Route::get('/activity-created', [ActivityController::class, 'create']);
Route::post('/activity-insert', [ActivityController::class, 'insert']);


Route::get('/send-test-email', function () {
    
    Mail::to('ppsuactivity@gmail.com')->send(new SendMail());

    return 'Test email sent!';

});