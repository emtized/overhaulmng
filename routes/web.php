<?php

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
Route::get('/login',[\App\Http\Controllers\User\AuthController::class,'showLogin'])->name('user.login.get');
Route::get('/register',[\App\Http\Controllers\User\AuthController::class,'showRegister']);
Route::get('/profile',[\App\Http\Controllers\User\ProfileController::class,'showProfile']);
Route::get('/profile/personal-info',[\App\Http\Controllers\User\ProfileController::class,'info'])->name('user.show.info');
Route::get('/forget-pass',[\App\Http\Controllers\User\AuthController::class,'showforgetPass']);
Route::get('/profile/notification-all',[\App\Http\Controllers\User\NotificationController::class,'all'])->name('user.notification.unread');
