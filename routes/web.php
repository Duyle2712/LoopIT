<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobseeker\MainController;
use App\Http\Controllers\jobseeker\AuthController;

use App\Http\Controllers\recruiter\RecruiterController;
use App\Http\Controllers\admins\AdminController;


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

//Trang chủ website
Route::get('/', [MainController::class, 'gethome'])->name('Home');


//Nhóm route "js" gồm các trang chức năng của Ứng viên
Route::group(['prefix'=>'/jobseeker'], function(){
    Route::get('/profile', [MainController::class, 'getProfile_js']);
    Route::get('/job_search', [MainController::class, 'getJob_search']);
    Route::get('/job_detail', [MainController::class, 'getJob_detail']);
    Route::get('/dashboard', [MainController::class, 'getDashboard'])->name('js_dasboard');
    Route::get('/jobmana', [MainController::class, 'getJob_manage'])->name('js_jobmana');
    Route::get('/jobnoti', [MainController::class, 'getJob_noti'])->name('js_jobnoti');
    Route::get('/recruitersee', [MainController::class, 'getRec_see'])->name('js_rcsee');
    Route::get('/search', [MainController::class, 'getSearch'])->name('js_search');
});

//Nhóm route "js_auth" gồm các trang bảo mật tài khoản Ứng viên
Route::group(['prefix'=>'/js_auth'], function(){
    Route::get('/login', [AuthController::class, 'getLogin_js']);
    Route::get('/signup', [AuthController::class, 'getSignup_js']);
});





