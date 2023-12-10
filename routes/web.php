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


//admin login routes
Route::get('/loginToAdmin',[\App\Http\Controllers\Admin\AdminController::class,'showLogin'])->name('admin.show.login');
Route::post('/post',[App\Http\Controllers\Admin\AdminController::class,'handleLogin'])->name('admin.post.login');
Route::get('/logout',[\App\Http\Controllers\Admin\AdminController::class,'logout'])->name('admin.logout');


//admin routes
Route::prefix('admin')->middleware(['auth','role:admin'])->group(function () {

    //admin dashboard
    Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin');

});



//profile routes
Route::middleware(['checkCustomerLogin'])->prefix('/profile')->group(function(){

    Route::get('/',[\App\Http\Controllers\User\ProfileController::class,'showProfile'])->name('profile');
    Route::get('/personal-info',[\App\Http\Controllers\User\ProfileController::class,'info'])->name('user.show.info');
    Route::get('/personal-docs',[\App\Http\Controllers\User\ProfileController::class,'docs'])->name('user.show.docs');
    Route::get('/personal-health',[\App\Http\Controllers\User\ProfileController::class,'health'])->name('user.show.health');
    Route::get('/personal-banks',[\App\Http\Controllers\User\ProfileController::class,'banks'])->name('user.show.bank');
    Route::get('/timesheet',[\App\Http\Controllers\User\ProfileController::class,'timesheet'])->name('user.show.timesheet');
    Route::get('/notification-all',[\App\Http\Controllers\User\NotificationController::class,'all'])->name('user.notification.unread');

});


//auth routes
Route::get('/login',[\App\Http\Controllers\User\AuthController::class,'showLogin'])->name('user.login.get');
Route::post('/loginForm', [\App\Http\Controllers\User\AuthController::class,'login'])->name('user.login.form');
Route::get('/register',[\App\Http\Controllers\User\AuthController::class,'showRegister']);
Route::post('/RegisterForm', [\App\Http\Controllers\User\AuthController::class,'register'])->name('user.register.form');
Route::get('/forget-pass',[\App\Http\Controllers\User\AuthController::class,'showforgetPass']);
Route::get('/customerLogout',[\App\Http\Controllers\User\AuthController::class,'logout'])->name('profile.logout');

