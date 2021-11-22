<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\recruiter\RecruiterController;
use App\Http\Controllers\recruiter\auth\AuthController;


// <<<<<<<<<< Nhà tuyển dụng Route >>>>>>>>>>>>>

Route::middleware('IsLoginRecruiter')->group(function () {
    //Login NTD
    Route::get('/login', [AuthController::class, 'getLogin'])->name('recruiter.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('recruiter.login_post');
    //Register NTD
    Route::get('/register', [AuthController::class, 'getRegister'])->name('recruiter.register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('recruiter.register_post');
    //Xác thực email sau khi đăng ký
    Route::get('/actived/{taiKhoanNTD}/{token}', [AuthController::class, 'activedEmail'])->name('recruiter.actived_email');
    //Gửi lại email Xác thực
    Route::get('/verify-mail', [AuthController::class, 'getSendMailAgain'])->name('recruiter.send_mail_again');
    Route::post('/verify-mail', [AuthController::class, 'postSendMailAgain'])->name('recruiter.send_mail_again_post');
    //Quên mệt Khẩu
    Route::get('/forget-password', [AuthController::class, 'getForgetPassword'])->name('recruiter.forget_password');
    Route::post('/forget-password', [AuthController::class, 'postForgetPassword'])->name('recruiter.forget_password_post');
    //Đổi mật khẩu
    Route::get('/change-password/{taiKhoanNTD}/{token}', [AuthController::class, 'getChangePassword'])->name('recruiter.change_password');
    Route::post('/change-password', [AuthController::class, 'postChangePassword'])->name('recruiter.change_password_post');
    
   
});
 
Route::middleware('AuthRecruiter')->group(function (){
    //Home
    Route::get('/', [RecruiterController::class, 'index'])->name('recruiter.home');
    //Quản lý đăng tuyển
    Route::get('/job-posting', [RecruiterController::class, 'getJobPosting'])->name('recruiter.get_posting_job');
    //Logout NTD
    Route::get('/logout', [AuthController::class, 'getLogout'])->name('recruiter.logout');
});