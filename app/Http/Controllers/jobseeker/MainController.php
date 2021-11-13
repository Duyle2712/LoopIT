<?php

namespace App\Http\Controllers\jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function getHome(){
        return view('pages/jobseeker/home');
    }

    function getProfile_js(){
        return view('pages/jobseeker/js_profile');
    }

    function getJob_search(){
        return view('pages/jobseeker/job_search');
    }

    function getJob_detail(){
        return view('pages/jobseeker/job_detail');
    }
}
