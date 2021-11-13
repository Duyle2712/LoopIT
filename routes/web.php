<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobseeker\MainController;
use App\Http\Controllers\jobseeker\AuthController;

use App\Http\Controllers\recruiter\RecruiterController;

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
Route::group(['prefix'=>'/js', 'as'=>'js'], function(){
    Route::get('/profile', [MainController::class, 'getProfile_js']);
    Route::get('/job_search', [MainController::class, 'getJob_search']);
    Route::get('/job_detail', [MainController::class, 'getJob_detail']);
});

//Nhóm route "js_auth" gồm các trang bảo mật tài khoản Ứng viên
Route::group(['prefix'=>'/js_auth'], function(){
    Route::get('/login', [AuthController::class, 'getLogin_js']);
    Route::get('/signup', [AuthController::class, 'getSignup_js']);
});

//Nhà tuyển dụng
Route::group(['prefix'=>'/recruiter', 'as'=>'rc'], function(){

    //trang chủ ntd
    Route::get('/', [RecruiterController::class, 'getRecruiterHome'])->name('reHome');
    Route::get('/home', [RecruiterController::class, 'getRecruiterHome'])->name('reHome');

    //quản lý đăng tuyển
    Route::get('/job_posting', [RecruiterController::class, 'getJobPosting'])->name('getJobPost');
});
