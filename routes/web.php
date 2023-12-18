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
Route::prefix('admin')->middleware(['auth','role:Administrator|Admin'])->group(function () {

    //admin dashboard
    Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin');

    //admin-user
    Route::prefix('users')->group(function () {
        Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.user.index');
        Route::post('/store', [\App\Http\Controllers\Admin\UserController::class,'store'])->name('admin.user.store');
        Route::get('/edit/{user}',[\App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin.user.edit');
        Route::put('/update/{user}',[\App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.user.update');
        Route::delete('/destroy/{user}',[\App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin.user.delete');
    });

    //customer
    Route::prefix('customer')->group(function () {
        Route::get('/',[\App\Http\Controllers\Admin\CustomerController::class,'index'])->name('admin.customer.index');
        Route::post('/store', [\App\Http\Controllers\Admin\CustomerController::class,'store'])->name('admin.customer.store');
        Route::get('/edit/{customer}',[\App\Http\Controllers\Admin\CustomerController::class,'index'])->name('admin.customer.edit');
        Route::delete('/destroy/{customer}',[\App\Http\Controllers\Admin\CustomerController::class,'destroy'])->name('admin.customer.delete');
    });

});



//profile routes
Route::middleware(['checkCustomerLogin'])->prefix('/profile')->group(function(){

    Route::get('/',[\App\Http\Controllers\User\ProfileController::class,'showProfile'])->name('profile');

    //personal-info
    Route::get('/personal-info',[\App\Http\Controllers\User\ProfileController::class,'info'])->name('user.show.info');
    Route::put('/personal-info/{customer}', [\App\Http\Controllers\User\InfoController::class, 'update'])->name('user.update.info');
    //personal-docs
    Route::get('/personal-docs',[\App\Http\Controllers\User\ProfileController::class,'docs'])->name('user.show.docs');
    Route::put('/personal-docs/cart/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setCart'])->name('user.update.cart');
    Route::put('/personal-docs/shena/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setShena'])->name('user.update.shena');
    Route::put('/personal-docs/shena2/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setShena2'])->name('user.update.shena2');
    Route::put('/personal-docs/soldier/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setSoldier'])->name('user.update.soldier');
    Route::put('/personal-docs/image/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setImage'])->name('user.update.image');
    Route::put('/personal-docs/smook/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setSmook'])->name('user.update.smook');
    Route::put('/personal-docs/police/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setPolice'])->name('user.update.police');
    Route::put('/personal-docs/doctor/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setDoctor'])->name('user.update.doctor');
    Route::put('/personal-docs/work/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setWork'])->name('user.update.work');
    Route::put('/personal-docs/ins/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setIns'])->name('user.update.ins');
    Route::put('/personal-docs/ju/{customer}', [\App\Http\Controllers\User\ImageController::class, 'setJu'])->name('user.update.ju');
    //personal-health
    Route::get('/personal-health',[\App\Http\Controllers\User\ProfileController::class,'health'])->name('user.show.health');
    Route::put('/personal-health/{physical}', [\App\Http\Controllers\User\PhysicalController::class, 'update'])->name('user.update.health');
    //personal-banks
    Route::get('/personal-banks',[\App\Http\Controllers\User\ProfileController::class,'banks'])->name('user.show.bank');
    Route::post('/bank-store',[\App\Http\Controllers\User\BankInfoController::class,'store'])->name('user.bank.store');
    Route::delete('/bank-delete/{bank}',[\App\Http\Controllers\User\BankInfoController::class,'destroy'])->name('user.bank.delete');

    //time
    Route::get('/timesheet',[\App\Http\Controllers\User\ProfileController::class,'timesheet'])->name('user.show.timesheet');

    Route::get('/notification-all',[\App\Http\Controllers\User\NotificationController::class,'all'])->name('user.notification.unread');

});


//auth routes
Route::get('/login',[\App\Http\Controllers\User\AuthController::class,'showLogin'])->name('user.login.get');
Route::post('/loginForm', [\App\Http\Controllers\User\AuthController::class,'login'])->name('user.login.form');
Route::get('/register',[\App\Http\Controllers\User\AuthController::class,'showRegister'])->name('user.register.get');
Route::post('/RegisterForm', [\App\Http\Controllers\User\AuthController::class,'register'])->name('user.register.form');
Route::get('/forget-pass',[\App\Http\Controllers\User\AuthController::class,'showforgetPass']);
Route::get('/customerLogout',[\App\Http\Controllers\User\AuthController::class,'logout'])->name('profile.logout');
Route::post('/checkNationalCode',[\App\Http\Controllers\User\AuthController::class,'checkNationalCode'])->name('checkCode');
