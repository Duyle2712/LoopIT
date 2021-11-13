<?php

namespace App\Http\Controllers\jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function getLogin_js(){
        return view('pages/jobseeker/js_login');
    }

    function getSignup_js(){
        return view('pages/jobseeker/js_signup');
    }
}
