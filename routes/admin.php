<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admins\AdminController;
use App\Http\Controllers\admins\auth\AuthController;


// <<<<<<<<<< Admin Route >>>>>>>>>>>>>

Route::middleware('IsLoginAdmin')->group(function () {
    //Login Admin 
    Route::get('/login', [AuthController::class, 'getLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('admin.login_post');
});

Route::middleware('AuthAdmin')->group(function () {
    // Admin home page
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    //Logout Admin
    Route::get('/logout', [AuthController::class, 'getLogout'])->name('admin.logout');
    //Logout Admin
    Route::get('/test', [AdminController::class, 'getTest'])->name('admin.test');
  
});